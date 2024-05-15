<?php

namespace Database\Seeders\Certificate;

use App\Models\Certificate\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $certificates = [
            [
                'id'        => '9c0bd9fa-c4a3-48b6-8f91-05a06f396b55',
                'slug'      => Str::slug('Certificate of Development'),
                'title'     => 'Certificate of Development',
                'content'   => 'This is certificate of development',
            ],
            [
                'id'        => '9c0bda0e-9acc-4a35-8eea-100518833063',
                'slug'      => Str::slug('Certificate of Discharge'),
                'title'     => 'Certificate of Discharge',
                'content'   => 'This is certificate of discharge',
            ],
            [
                'id'        => '9c0bda21-7b3b-4558-9805-ae52a1e4f0d5',
                'slug'      => Str::slug('Certificate of ATTECTAT'),
                'title'     => 'Certificate of ATTECTAT',
                'content'   => 'This is certificate of ATTECTAT',
            ],
        ];

        $certificates = collect($certificates)->map(fn($certificate, $index) => ([
            ...$certificate,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        Certificate::insert($certificates->toArray());
        $this->call(ImageSeeder::class);
    }
}
