<?php

namespace Database\Seeders\Portfolio;

use App\Models\Portfolio\Thumbnail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThumbnailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $thumbnails = [
            [
                'id'            => '9c0c115c-1559-48aa-a369-c2a34627da8e',
                'portfolio_id'  => '9c0c115c-1176-430f-bad6-1a5530d377d0',
                'uri'           => '/seeders/portfolios/thumbnails/e14c3f34-8b51-418b-bb3a-496d9cfd3ca0.webp',
                'alt'           => 'Portfolio 1',
            ],
            [
                'id'            => '9c0c11ab-c240-4ac9-bbb1-112327720ab5',
                'portfolio_id'  => '9c0c11ab-bf18-480c-94db-a852c48ae3e9',
                'uri'           => '/seeders/portfolios/thumbnails/995900a1-bad8-468d-a7db-657f1079a760.webp',
                'alt'           => 'Portfolio 2',
            ],
            [
                'id'            => '9c0c11f9-8ec4-47fd-b1de-e79fdd7d36a2',
                'portfolio_id'  => '9c0c11f9-8c67-4d8d-bc66-1f4d9b3d4025',
                'uri'           => '/seeders/portfolios/thumbnails/92db278d-acf1-4941-931c-e66f25e64382.webp',
                'alt'           => 'Portfolio 3',
            ],
        ];

        $thumbnails = collect($thumbnails)->map(fn($thumbnail, $index) => ([
            ...$thumbnail,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        Thumbnail::insert($thumbnails->toArray());
    }
}
