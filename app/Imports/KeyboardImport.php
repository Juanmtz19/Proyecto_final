<?php

namespace App\Imports;

use App\Models\Keyboard;
use Maatwebsite\Excel\Concerns\ToModel;

class KeyboardImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Keyboard([
            'brand'                     => $row ['0'],
            'mark'                     => $row ['1'],
            'sampler'                  => $row ['2'],
            'octaves'                  => $row ['3'],
            'case'                     => $row ['4'],
            'fuction'                  => $row ['5'],
           'pedal'                     => $row ['6'],
           'color'                     => $row ['7'],
           'description'               => $row ['8'],
           'comment'                   => $row ['8'],
            'chac'                     => $row ['9'],         
           'available'                 => $row ['10'],
        ]);
    }
}
