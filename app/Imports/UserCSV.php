<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserCSV implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        //        try {
        return new User([

            'username'       => $row['username'],
            'email'          => trim($row['email']),
            'password'       => Hash::make(trim($row['password'])),
            'usertype'       => trim($row['usertype']),
            'userrole'       => trim($row['userrole']),
            'deptcode'       => trim($row['deptcode']),
            'institutecode'  => trim($row['institutecode']),
            'status_02'      => trim($row['status_02']),
        ]);
    }
}
