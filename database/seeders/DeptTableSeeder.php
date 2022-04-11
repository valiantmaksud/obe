<?php

namespace Database\Seeders;

use App\Models\DeptInfo;
use Illuminate\Database\Seeder;

class DeptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DeptInfo::create([
            'deptcode'      => 'cse',
            'deptname'      => 'CSE'
        ]);
    }
}
