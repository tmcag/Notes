<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
       DB::table('users')->insert([
           [
               'id' => Str::uuid(),
               'username' => 'Thiago Aguiar',
               'email' => 'thiago.m.aguiiar@outlook.com',
               'password' => bcrypt('123'),
               'created_at' => now(),
           ],
           [
               'id' => Str::uuid(),
               'username' => 'Maria da Silva',
               'email' => 'maria.silva@gmail.com',
               'password' => bcrypt('123'),
               'created_at' => now(),
           ]
       ]);
    }
}
