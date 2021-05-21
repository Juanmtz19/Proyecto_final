<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\GuitarExport;
use App\Imports\GuitarImport;
use Maatwebsite\Excel\Facades\Excel;



class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guitar = Guitar::all();
        return view ('guitar.index', compact('guitar'));
    }

    public function index2()
    {
        $guitar = Guitar::all();
        return view ('guitar.index2', compact('guitar'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view ('guitar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guitar = $request->except('_token');
        if ($img = $request->file('image')) {
            $destinationPath = 'imagenes/guitar/';
            $name = date ('YmHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $guitar['image'] = "$name";
        
        }


        guitar::create($guitar);
        return redirect()->to(url('/guitar'));
        //return view('guitar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        return view ('guitar.show' , compact('guitar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        return view ('guitar.edit', compact('guitar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guitar $guitar)
    {
        $dataGuitar = request()->except('_token');
        $guitar->update($dataGuitar);
        return redirect()->to(url('/guitar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guitar $guitar)
    {
        $guitar->delete();
        return redirect()->to(url('/guitar'));
    }


public function exportToCSV(Request $request){
    $fileName = 'guitars.csv';
    $guitars = Guitar::all();

    $headers = array (
        "Content-type"  =>"text/csv",
        "Content-Disposition" => "attachment; fileName= $fileName",
        "Pragma"  => "no-cache",
        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $columns = array ('Modelo' , 'Color', 'Española', 'Clasica', 'Descripción', 'Número');

    $callback = function() use($guitars, $columns) {
        $file = fopen('php://output' , 'w');
        fputcsv($file, $columns);

        foreach ($guitars as $guitar) {
            $row ['brand']  =$guitar->brand;
            $row ['color']  =$guitar->color;
            $row ['spanish']  =$guitar->spanish;
            $row ['description']  =$guitar->description;
            $row ['number']  =$guitar->number;

            fputcsv($file, array ($row['brand'],$row['color'],$row['spanish'],$row['classic'],$row['description'],$row['number'], ));
        }
        fclose($file);
    };
    return response()->stream($callback,200,$headers);
}

    public function chart () {

        $guitars = Guitar::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y')) 
        ->groupBy (\DB::raw("Second(created_at)"))
        ->pluck('count');

        $guitars2 = Guitar::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y')) 
        ->groupBy (\DB::raw("Minute(created_at)"))
        ->pluck('count');

        return view ('guitar.chart')
        ->with('guitars', $guitars)
        ->with('guitars2', $guitars2);
    }

        public function cards() {
        $guitar = Guitar::all();
        return view ('guitar.cards', compact('guitar'));

        }

        public function exportToXlsx() {
            return Excel::download(new GuitarExport, 'guitar.xlsx');
        }
    
        public function import() {
            return view('guitar.impor');
        }
    
        public function importData(Request $request) {
            Excel::import(new GuitarImport,   request()->file('excel'));
            return redirect()->to(url('guitar'));
        }

}    