<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Budi nj',
                'alamat' => 'Semarang',
                'no_hp' => '098223810',
                'email' => 'gastonBadni@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',

            ],
            [
                'nama' => 'Rehan',
                'alamat' => 'Semarang',
                'no_hp' => '08867822',
                'email' => 'riahn17@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',

            ],

        ]);
       
    }
}