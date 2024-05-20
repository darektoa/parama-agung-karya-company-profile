<?php

namespace Database\Seeders\Service;

use App\Models\Service\Thumbnail;
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
                'id'            => '9c15c5d2-cd92-4a28-b162-5dff62d0494e',
                'service_id'    => '9c15c5d2-cbdb-4945-9a31-20dc41198381',
                'uri'           => '/seeders/services/thumbnails/403f3fc3-eb66-4253-9e11-f7bb9e634644.webp',
                'alt'           => 'Service 1',
            ],
            [
                'id'            => '9c15c5aa-8934-4057-a601-5c5e5c5af4b1',
                'service_id'    => '9c15c5aa-8743-42e7-a675-d811bc3cd591',
                'uri'           => '/seeders/services/thumbnails/22f48e62-acb3-4eb0-a577-c6bdd4045f72.webp',
                'alt'           => 'Service 2',
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
