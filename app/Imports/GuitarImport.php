<?php

namespace App\Imports;

use App\Models\Guitar;
use Maatwebsite\Excel\Concerns\ToModel;

class GuitarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guitar([
            'brand'         => $row ['0'],
            'color'         => $row ['1'],
            'spanish'       => $row ['2'],
            'classic'       => $row ['3'],
            'description'   => $row ['4'],
            'comment'       => $row ['5'],
            'available'     => $row ['6'],
            'number'        => $row ['7'],
        ]);
    }
}
