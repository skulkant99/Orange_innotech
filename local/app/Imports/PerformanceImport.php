<?php

namespace App\Imports;

use App\Performance;
use Maatwebsite\Excel\Concerns\ToModel;

class PerformanceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Performance([
            //
            'name'      => $row[0],
            'fund'      => $row[1], 
            'gain'      => $row[2],
            'result'    => $row[3],
            'Indicator' => $row[4],
            'type'      => $row[5],

        ]);
    }
}
