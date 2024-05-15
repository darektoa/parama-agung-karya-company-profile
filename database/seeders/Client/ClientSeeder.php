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
                'id'    => '9c0be1e4-ce14-44e3-beaf-bfce7d68f5c7',
                'uri'   => '/seeders/clients/images/8dbc6973-65c8-470a-8b81-accea46685b1.png',
                'alt'   => 'Client 1',
            ],
            [
                'id'    => '9c0be1f1-c89b-48de-b7cb-41b72505f83b',
                'uri'   => '/seeders/clients/images/7cd9b9e4-ff54-46ac-bf59-b1d0fed1aecb.png',
                'alt'   => 'Client 2',
            ],
            [
                'id'    => '9c0be20f-81b8-4003-9127-488a5b17f12c',
                'uri'   => '/seeders/clients/images/c8154d57-e77b-4678-9831-aa82f84daade.png',
                'alt'   => 'Client 3',
            ],
            [
                'id'    => '9c0be233-79d3-4e1f-90c3-150c7b4ed424',
                'uri'   => '/seeders/clients/images/5a388663-9b29-4ac2-a1fb-2527cb183307.png',
                'alt'   => 'Client 4',
            ],
            [
                'id'    => '9c0be23e-e3d4-42df-864f-6c3304dd319c',
                'uri'   => '/seeders/clients/images/ae35b3d8-66a4-41f1-8c59-107372f218af.png',
                'alt'   => 'Client 5',
            ],
            [
                'id'    => '9c0be24b-2e46-4ad9-b027-bb2d18e76c07',
                'uri'   => '/seeders/clients/images/637e8746-df82-482d-8cff-bdc294326c6f.png',
                'alt'   => 'Client 6',
            ],
        ];

        $clients = collect($clients)->map(fn($client, $index) => ([
            ...$client,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        Client::insert($clients->toArray());
    }
}
