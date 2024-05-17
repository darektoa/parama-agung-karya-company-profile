<?php

namespace Database\Seeders\Blog;

use App\Models\Blog\Thumbnail;
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
                'id'        => '9c0bda6d-dea9-4797-83ee-1ea27db34948',
                'blog_id'   => '9c0bda6d-d686-4785-860d-be332bbdd0b6',
                'uri'       => '/seeders/blogs/thumbnails/1e13e3a6-af74-4a4a-9339-322ee95e9c8e.webp',
                'alt'       => 'Blog 1',
            ],
            [
                'id'        => '9c0bda87-23c2-4ae2-b1c9-5f23ba2308a9',
                'blog_id'   => '9c0bda87-2057-478d-8f33-f40038c102a8',
                'uri'       => '/seeders/blogs/thumbnails/6e8c1c0f-e65f-4ecf-82b0-d2e66a9c14a4.webp',
                'alt'       => 'Blog 2',
            ],
            [
                'id'        => '9c0bda9e-df99-4a4d-8d60-8b47001ec562',
                'blog_id'   => '9c0bda9e-dccc-4aae-9777-d8b42adca1a3',
                'uri'       => '/seeders/blogs/thumbnails/c2582e25-0a2a-414a-9c3f-97f2f4bc0ad5.webp',
                'alt'       => 'Blog 3',
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
