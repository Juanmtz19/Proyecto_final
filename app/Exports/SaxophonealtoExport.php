<?php

namespace App\Exports;

use App\Models\Saxophonealto;
use Maatwebsite\Excel\Concerns\FromCollection;

class SaxophonealtoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Saxophonealto::all();
    }
}
