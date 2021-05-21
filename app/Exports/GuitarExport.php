<?php

namespace App\Exports;

use App\Models\Guitar;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuitarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Guitar::all();
    }
}
