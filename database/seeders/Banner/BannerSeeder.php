<?php

namespace Database\Seeders\Banner;

use App\Models\Banner\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'id'    => '9c0a278a-f8e6-4bb6-83b5-1efd7c5e4c40',
                'uri'   => '/seeders/banners/images/dea78ac1-bd6a-4639-94af-7c8824816cb3.png',
                'alt'   => 'Banner 1',
            ],
            [
                'id'    => '9c0a276d-6858-4fc0-9f5c-45dc7751f928',
                'uri'   => '/seeders/banners/images/374f3140-2bba-4cf4-b198-6ee9970253ce.png',
                'alt'   => 'Banner 2',
            ],
            [
                'id'    => '9c0a27ea-7ea8-47e2-876c-73486d18d8a3',
                'uri'   => '/seeders/banners/images/376a1b2b-a1c1-4bfb-8e6b-91425d90b70d.png',
                'alt'   => 'Banner 3',
            ],
        ];

        $banners = collect($banners)->map(fn($banner, $index) => ([
            ...$banner,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        Banner::insert($banners->toArray());
    }
}
