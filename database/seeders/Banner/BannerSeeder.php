<?php

namespace Database\Seeders\Banner;

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
                'uri'   => '/seeders/banners/images/be5b3e06-bf10-4ca1-9efa-52803c719b47.png',
                'alt'   => 'Banner 1',
            ],
            [
                'id'    => '9c0a276d-6858-4fc0-9f5c-45dc7751f928',
                'uri'   => '/seeders/banners/images/d1f0b0c7-1f50-49ce-8b2d-f012799f6eb3.png',
                'alt'   => 'Banner 2',
            ],
            [
                'id'    => '9c0a27ea-7ea8-47e2-876c-73486d18d8a3',
                'uri'   => '/seeders/banners/images/c58c5a72-adbf-45f5-b806-9be1048305e2.png',
                'alt'   => 'Banner 3',
            ],
        ];
    }
}
