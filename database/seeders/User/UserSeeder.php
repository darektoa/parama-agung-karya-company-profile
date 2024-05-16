<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'        => '3b934b1f-9ff7-4cc8-a88e-b29844aae199',
                'name'      => 'Admin',
                'username'  => 'admin',
                'email'     => 'admin@example.com',
                'password'  => '$2y$12$Ck4D2nnpoBsFbfbfDEAEEeEUqrC3U8bO8hlRCT4PQgWH2FdYR710O' //password
            ],
        ];

        $users = collect($users)->map(fn($user, $index) => ([
            ...$user,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        User::insert($users->toArray());
    }
}
