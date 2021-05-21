<?php

namespace App\Imports;

use App\Models\Contrato;
use Maatwebsite\Excel\Concerns\ToModel;

class ContratoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contrato([
            'grup'             => $row ['0'],
            'grup2'            => $row ['1'],
            'eventName'        => $row ['2'],
            'city'             => $row ['3'],
            'place'            => $row ['4'],
            'stage'            => $row ['5'],
            'date'             => $row ['6'],
            'capacity'         => $row ['7'],         
            'description'      => $row ['8'],
            'comment'          => $row ['9'],
            'available'        => $row ['10'],
            'payment'          => $row ['11'],    
        
        ]);
    }
}
