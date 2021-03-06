<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'userid'        => 1,
            'username'      => 'Mr. Admin',
            'email'         => 'admin@gmail.com',
            'password'      => Hash::make(12345678),
            'usertype'      => 'Admin',
            'userrole'      => 'Admin',
            'deptcode'      => 'cse',
            'institutecode' => 'sub',
            'status_02'     => 1,
        ]);
    }
}
