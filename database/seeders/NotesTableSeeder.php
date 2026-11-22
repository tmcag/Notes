<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'user_id' => 'fd64a14d-d0cc-4251-a046-08aa6606a94e',
                'title' => 'Minha primeira nota',
                'body' => 'Minha primeira nota',
                'created_at' => now(),
            ]
        ]);
    }
}
