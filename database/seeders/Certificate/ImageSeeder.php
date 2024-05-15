<?php

namespace Database\Seeders\Certificate;

use App\Models\Certificate\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'id'                => '9c0bd9fa-c7e2-42d5-84e1-434189eea1e2',
                'certificate_id'    => '9c0bd9fa-c4a3-48b6-8f91-05a06f396b55',
                'uri'               => '/seeders/certificates/images/4c80f81f-86a9-44fd-b905-9cb08f658ce7.jpeg',
                'alt'               => 'Certificate 1',
            ],
            [
                'id'                => '9c0bda0e-9d56-4108-9384-5295d330ada4',
                'certificate_id'    => '9c0bda0e-9acc-4a35-8eea-100518833063',
                'uri'               => '/seeders/certificates/images/e9e200eb-2f18-43c7-aff4-08cadcd2f054.jpeg',
                'alt'               => 'Certificate 2',
            ],
            [
                'id'                => '9c0bda21-7cc9-49d4-87bb-9bdb6842833f',
                'certificate_id'    => '9c0bda21-7b3b-4558-9805-ae52a1e4f0d5',
                'uri'               => '/seeders/certificates/images/10388a96-f999-4828-94f7-e5aaa50dd809.jpeg',
                'alt'               => 'Certificate 3',
            ],
        ];

        $images = collect($images)->map(fn($image, $index) => ([
            ...$image,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        Image::insert($images->toArray());

    }
}
