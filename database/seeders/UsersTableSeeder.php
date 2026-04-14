<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    private function getPasswordHash(string $password = '123@abc'): string
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_id' => '123e4567-e89b-12d3-a456-426614174000',
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => $this->getPasswordHash(),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => '123e4567-e89b-12d3-a456-426614174001',
                'name' => 'Alice Smith',
                'email' => 'alice.smith@example.com',
                'password' => $this->getPasswordHash(),
                'created_at' => date('Y-m-d H:i:s'),
            ],
             [
                'user_id' => '123e4567-e89b-12d3-a456-426614174002',
                'name' => 'Bob Johnson',
                'email' => 'bob.johnson@example.com',
                'password' => $this->getPasswordHash(),
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
