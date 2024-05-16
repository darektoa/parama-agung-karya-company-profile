<?php

namespace Database\Seeders;

use Database\Seeders\Portfolio\PortfolioSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            User\UserSeeder::class,
            Banner\BannerSeeder::class,
            Blog\BlogSeeder::class,
            Certificate\CertificateSeeder::class,
            Client\ClientSeeder::class,
            Content\DirectorySeeder::class,
            Content\ContentSeeder::class,
            Portfolio\PortfolioSeeder::class,
        ]);
    }
}
