<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
            'name' => 'Misbahur Rifqi',
            'email' => 'rifqi.tampan61@gmail.com',
            'activ' => '1',
            'password' => Hash::make('rifqi123')
            ],
            [
            'name' => 'Admin Kesenian',
            'email' => 'admin@gmail.com',
            'active' => '0',
            'password' => Hash::make('rifqi123')
            ],
        ];

        User::insert($user);
    }
}
