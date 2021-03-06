<?php

namespace App\Http\Controllers;

use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\KeyboardExport;
use App\Imports\KeyboardImport;
use Maatwebsite\Excel\Facades\Excel;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyboard = Keyboard::all();
        return view ('keyboard.index', compact('keyboard'));
    }

    public function index2()
    {
        $keyboard = Keyboard::all();
        return view ('keyboard.index2', compact('keyboard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('keyboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keyboard = $request->except('_token');
        if ($img = $request->file('image')) {
            $destinationPath = 'imagenes/keyboard/';
            $name = date ('YmHis') . "." .
            $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $keyboard['image'] = "$name";
        
        }
        keyboard::create($keyboard);
        return redirect()->to(url('/keyboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function show(Keyboard $keyboard)
    {
        return view ('keyboard.show' , compact('keyboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Keyboard $keyboard)
    {
        return view ('keyboard.edit', compact('keyboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keyboard $keyboard)
    {
        $dataKeyboard = request()->except('_token');
        $keyboard->update($dataKeyboard);
        return redirect()->to(url('/keyboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyboard $keyboard)
    {
        $keyboard->delete();
        return redirect()->to(url('/keyboard'));
    }

    public function exportToCSV(Request $request){
        $fileName = 'keyboards.csv';
        $keyboards = Keyboard::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array ('Modelo' , 'Marca', 'sampler', 'Color', 'Tuneado', 'Pedal', 'Octaves' , 'Descripci??n');
    
        $callback = function() use($keyboards, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
    
            foreach ($keyboards as $keyboard) {
                $row ['brand']  =$keyboard->brand;
                $row ['color']  =$keyboard->color;
                $row ['mark']  =$keyboard->mark;
                $row ['description']  =$keyboard->description;
                $row ['sampler']  =$keyboard->sampler;
                $row ['pedal']  =$keyboard->pedal;
                $row ['octaves']  =$keyboard->octaves;
                $row ['tune']  =$keyboard->tune;
    
                fputcsv($file, array ($row['octaves'],$row['tune'],$row['brand'],$row['mark'],$row['sampler'],$row['color'],$row['description'],$row['pedal'], ));
            }
            fclose($file);
        };
        return response()->stream($callback,200,$headers);
} 

public function chart () {

    $keyboards = Keyboard::select(\DB::raw("COUNT(*) as count"))
    ->whereYear('created_at', date('Y')) 
    ->groupBy (\DB::raw("Second(created_at)"))
    ->pluck('count');

    $keyboards2 = Keyboard::select(\DB::raw("COUNT(*) as count"))
    ->whereYear('created_at', date('Y')) 
        ->groupBy (\DB::raw("Minute(created_at)"))
        ->pluck('count');


    return view ('keyboard.chart')
    ->with('keyboards', $keyboards)
    ->with('keyboards2', $keyboards2);

}

public function cards() {
    $keyboard = Keyboard::all();
    return view ('keyboard.cards', compact('keyboard'));

    }

    public function exportToXlsx() {
        return Excel::download (new KeyboardExport, 'keyboard.xlsx');
    }

    public function import() {
        return view('keyboard.import');
    }

    public function importData(Request $request) {
        Excel::import(new KeyboardImport, request()->file('excel'));
        return redirect()->to(url('keyboard'));
    }

}


