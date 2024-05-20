<?php

namespace Database\Seeders\Service;

use App\Models\Service\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'id'        => '9c15c5d2-cbdb-4945-9a31-20dc41198381',
                'slug'      => Str::slug('DESIGN & BUILD'),
                'title'     => 'DESIGN & BUILD',
                'content'   => 'Menyediakan dan pengadaan material sesuai dengan kebutuhan, tenaga kerja baik sistem kerja borongan maupun harian. Meliputi: Partisi interior, Epoxy lantai, pengecatan, penggantian atap, keramik, granit dll.',
            ],
            [
                'id'        => '9c15c5aa-8743-42e7-a675-d811bc3cd591',
                'slug'      => Str::slug('KONTRAKTOR'),
                'title'     => 'KONTRAKTOR',
                'content'   => 'Mengerjakan pekerjaan serta menyediakan bahan bangunan civil dan konstruksi dari mulai design layout perancangan bentuk dan bangunan serta pelaksanaan. Meliputi : Renovasi, Pabrikasi dan Repair.',
            ],
        ];

        $services = collect($services)->map(fn($service, $index) => ([
            ...$service,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        Service::insert($services->toArray());
        $this->call(ThumbnailSeeder::class);
    }
}
