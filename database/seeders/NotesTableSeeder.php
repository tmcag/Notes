<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            [
                'user_id' => '123e4567-e89b-12d3-a456-426614174001',
                'title' => 'Primeira Anotação',
                'text' => 'Sou um texto da minha primeira anotação'
            ],
            [
                'user_id' => '123e4567-e89b-12d3-a456-426614174001',
                'title' => 'Segunda Anotação',
                'text' => 'Sou um texto da minha segunda anotação'
            ]
        ]);
    }
}
