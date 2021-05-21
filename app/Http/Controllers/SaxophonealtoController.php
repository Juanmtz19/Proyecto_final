<?php

namespace App\Http\Controllers;

use App\Models\Saxophonealto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\SaxophonealtoExport;
use App\Imports\SaxophoneImport;
use Maatwebsite\Excel\Facades\Excel;

class SaxophonealtoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saxophonealto = Saxophonealto::all();
        return view ('saxophonealto.index', compact ('saxophonealto'));
    }

    public function index2()
    {
        $saxophonealto = Saxophonealto::all();
        return view ('saxophonealto.index2', compact ('saxophonealto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('saxophonealto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saxophonealto = $request->except('_token');
        if ($img = $request->file('image')) {
            $destinationPath = 'imagenes/saxophonealto/';
            $name = date ('YmHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $saxophonealto['image'] = "$name";
        
        }
        saxophonealto::create($saxophonealto);
        return redirect()->to(url('/saxophonealto'));
        //return view('saxophone.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saxophonealto  $saxophonealto
     * @return \Illuminate\Http\Response
     */
    public function show(Saxophonealto $saxophonealto)
    {
        return view ('saxophonealto.show', compact('saxophonealto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saxophonealto  $saxophonealto
     * @return \Illuminate\Http\Response
     */
    public function edit(Saxophonealto $saxophonealto)
    {
        return view ('saxophonealto.edit' , compact ('saxophonealto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saxophonealto  $saxophonealto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saxophonealto $saxophonealto)
    {
        $dataSaxophonealto = request()->except('_token');
        $saxophonealto->update($dataSaxophonealto);
        return redirect()->to(url('/saxophonealto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saxophonealto  $saxophonealto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saxophonealto $saxophonealto)
    {
        $saxophonealto->delete();
    return redirect()->to(url('/saxophonealto'));
    }

    public function exportToCSV(Request $request){
        $fileName = 'Saxophonealtos.csv';
        $saxophonealtos = Saxophonealto::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array ('Modelo' , 'Marca', 'Registro', 'Color', 'Piezas', 'Descripción');
    
        $callback = function() use($saxophonealtos, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
    
            foreach ($saxophonealtos as $saxophonealto) {
                $row ['brand']  =$saxophonealto->brand;
                $row ['color']  =$saxophonealto->color;
                $row ['Register']  =$saxophonealto->Register;
                $row ['description']  =$saxophonealto->description;
                $row ['mark']  =$saxophonealto->mark;
                $row ['Pieces']  =$saxophonealto->Pieces;
    
                fputcsv($file, array ($row['brand'],$row['mark'],$row['Register'],$row['color'],$row['description'],$row['Pieces'], ));
            }
            fclose($file);
        };
        return response()->stream($callback,200,$headers);

    } 
     
    public function chart () {

        $saxophonealtos = Saxophonealto::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y')) 
        ->groupBy (\DB::raw("Second(created_at)"))
        ->pluck('count');

        $saxophonealtos2 = Saxophonealto::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y')) 
        ->groupBy (\DB::raw("Minute(created_at)"))
        ->pluck('count');
       
        $saxophonealtos3 = Saxophonealto::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y')) 
        ->groupBy (\DB::raw("Minute(created_at)"))
        ->pluck('count');
       

        return view ('saxophonealto.chart')
        ->with('saxophonealtos', $saxophonealtos)
        ->with('saxophonealtos2', $saxophonealtos2)
        ->with('saxophonealtos3', $saxophonealtos3);
    }
    public function cards() {
        $saxophonealto = Saxophonealto::all();
        return view ('saxophonealto.cards', compact('saxophonealto'));
    
        }
        
        public function exportToXlsx() {
            return Excel::download (new SaxophonealtoExport, 'saxophonealto.xlsx');
        }

        public function import() {
            return view('saxophonealto.import');
        }
    
        public function importData(Request $request) {
            Excel::import(new SaxophoneImport, request()->file('excel'));
            return redirect()->to(url('saxophonealto'));
        }
}
