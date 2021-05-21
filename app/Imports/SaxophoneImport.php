<?php

namespace App\Imports;

use App\Models\Saxophonealto;
use Maatwebsite\Excel\Concerns\ToModel;

class SaxophoneImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Saxophonealto([
            'brand'         => $row ['0'],
            'mark'         => $row ['1'],
            'color'        => $row ['2'],
            'Pieces'       => $row ['3'],
            'Register'     => $row ['4'],
            'description'  => $row ['5'],
           'comment'       => $row ['6'],
           'available'     => $row ['7'],
           'charac'        => $row ['8'],
        ]);
    }
}
