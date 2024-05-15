<?php

namespace Database\Seeders\Client;

use App\Models\Client\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'id'    => Str::uuid(),
                'uri'   => 'Hero Background',
                'alt'   => 'homeHeroBackground',
            ]
        ];

        $clients = collect($clients)->map(function($item) {
            return [
                ...$item,
                'created_at'    => now(),
                'updated_at'    => now(),
            ];
        });

        Client::insert();
    }
}
