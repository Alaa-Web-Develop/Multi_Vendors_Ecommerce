<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alaa Elattar',
            'email' => 'alaa.webdev@gmail.com',
            'password' =>Hash::make('alaa1234'),
            'phone_number' => '01006664023',
        ]);

        // User::create([
        //     'name' => 'Alaa Elattar',
        //     'email' => 'alaa.webdev@gmail.com',
        //     'password' =>Hash::make('alaa1234'),
        //     'phone_number' => '01006664023',
        // ]);
        DB::table('users')->insert([
            'name' => 'Adam Alaa',
            'email' => 'adam@gmail.com',
            'password' =>Hash::make('adam1234'),
            'phone_number' => '01106664023',
        ]);
    }
}
