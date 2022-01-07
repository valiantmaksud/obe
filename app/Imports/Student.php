<?php

namespace App\Imports;

use App\Models\Student as ModelsStudent;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Student implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        //        try {
        return new ModelsStudent([

            'studentid'       => $row['studentid'],
            'studentname'     => trim($row['studentname']),
            'batch'           => trim($row['batch']),
            'programcode'     => trim($row['programcode']),
            'deptcode'        => trim($row['deptcode']),
            'institutecode'   => trim($row['institutecode']),
            'status_07'       => trim($row['status_07']),
        ]);
    }
}
