<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ContratoExport;
use App\Imports\ContratoImport;
use Maatwebsite\Excel\Facades\Excel;



class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrato = Contrato::all();
        return view ('contrato.index', compact('contrato'));
    }

    public function index2()
    {
        $contrato = Contrato::all();
        return view ('contrato.index2', compact('contrato'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contrato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contrato = $request->except('_token');
        if ($img = $request->file('image')) {
            $destinationPath = 'imagenes/contrato/';
            $name = date ('YmHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $contrato['image'] = "$name";
        
        }

        contrato::create($contrato);
        return redirect()->to(url('/contrato'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        return view ('contrato.show' , compact('contrato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrato $contrato)
    {
        return view ('contrato.edit', compact('contrato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        $dataContrato = request()->except('_token');
        $contrato->update($dataContrato);
        return redirect()->to(url('/contrato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return redirect()->to(url('/contrato'));
    }

    
    public function exportToCSV(Request $request){
        $fileName = 'contratos.csv';
        $contratos = Contrato::all();
    
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
    
       $columns = array ('Artista' , 'Artista 2', 'Nombre Evento', 'Ciudad', 'Fecha', 'Capacidad', 'Pago' ,'Descripción', 'Sitio');
    
        $callback = function() use($contratos, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
    
            foreach ($contratos as $contrato) {
                $row ['grup']  =$contrato->grup;
                $row ['grup2']  =$contrato->grup2;
                $row ['eventName']  =$contrato->eventName;
                $row ['city']  =$contrato->city;
                $row ['date']  =$contrato->date;
                $row ['capacity']  =$contrato->capacity;
                $row ['place']  =$contrato->place;
                $row ['description']  =$contrato->description;
    
                fputcsv($file, array ($row['grup'],$row['grup2'],$row['eventName'],$row['city'],$row['place'],$row['capacity'],$row['description'],$row['date'], ));
            }
            fclose($file);
        };
        return response()->stream($callback,200,$headers);
}

public function chart () {

    $contratos = Contrato::select(\DB::raw("COUNT(*) as count"))
    ->whereYear('created_at', date('Y')) 
    ->groupBy (\DB::raw("Minute(created_at)"))
    ->pluck('count');

    $contratos2 = Contrato::select(\DB::raw("COUNT(*) as count"))   
    ->whereYear('created_at', date('Y')) 
    ->groupBy (\DB::raw("Second(created_at)"))
    ->pluck('count');

    return view ('contrato.chart')
    ->with('contratos', $contratos)
    ->with('contratos2', $contratos2);
} 

public function cards() {
    $contrato = Contrato::all();
    return view ('contrato.cards', compact('contrato'));

    }

    public function exportToXlsx() {
        return Excel::download (new ContratoExport, 'contrato.xlsx');
    }

    public function import() {
        return view('contrato.import');
    }

    public function importData(Request $request) {
        Excel::import(new  ContratoImport, request()->file('excel'));
        return redirect()->to(url('contrato'));
    }
}
