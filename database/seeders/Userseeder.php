<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $role = [
            'admin', 'kadis', 'kabid'
        ];

        $name = [
            'User admin', 'User kadis', 'User kabid'
        ];

        $username = [
            'admin', 'kepala dinas', 'kepala bidang'
        ];


        for ($i = 0; $i < count($username); $i++) {
            User::create([
                'role' => $role[$i],
                'name' => $name[$i],
                'username' => $username[$i],
                'password' => bcrypt('admin'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
