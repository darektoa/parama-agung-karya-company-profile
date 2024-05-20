<?php

namespace Database\Seeders\Portfolio;

use App\Models\Portfolio\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'id'        => '9c0c115c-1176-430f-bad6-1a5530d377d0',
                'slug'      => Str::slug('Civil and Construction Project'),
                'title'     => 'Civil and Construction Project',
                'content'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione aspernatur modi libero explicabo quibusdam inventore recusandae beatae voluptatum molestias, error quam aliquid quos nihil, autem sapiente obcaecati omnis ex velit dicta dolores, aperiam cum iusto doloribus maiores? Temporibus iusto ipsam soluta nostrum nihil incidunt dolore sed, corrupti accusamus dolor dolorum in illum? Dicta nihil rem ratione iste inventore!',
                'start_on'  => '2022-07-10',
                'end_on'    => '2024-03-01',
            ],
            [
                'id'        => '9c0c11ab-bf18-480c-94db-a852c48ae3e9',
                'slug'      => Str::slug('Building and Maintenance Offices'),
                'title'     => 'Building and Maintenance Offices',
                'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic repellendus maxime quibusdam. Culpa unde voluptatibus mollitia totam dicta accusamus veniam laboriosam tenetur. Culpa aliquid assumenda necessitatibus. Explicabo dolore alias pariatur cumque, hic dolorem adipisci mollitia expedita, molestiae quibusdam ipsum consequuntur atque voluptates dolorum quis vitae, fuga culpa magni deserunt fugiat! Libero, quis delectus?',
                'start_on'  => '2024-05-02',
                'end_on'    => '2024-05-30',
            ],
            [
                'id'        => '9c0c11f9-8c67-4d8d-bc66-1f4d9b3d4025',
                'slug'      => Str::slug('Electrical Installation in New District'),
                'title'     => 'Electrical Installation in New District',
                'content'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum facilis quam natus odio sunt tempora, praesentium laudantium eaque aperiam velit ratione quidem sit rem, minima delectus inventore hic esse deserunt modi explicabo. Vero itaque blanditiis nisi repellendus voluptate voluptatibus delectus nostrum quae, quod iure non illum exercitationem at quisquam!',
                'start_on'  => '2024-05-15',
                'end_on'    => '2024-05-31',
            ],
        ];

        $portfolios = collect($portfolios)->map(fn($portfolio, $index) => ([
            ...$portfolio,
            'created_at' => now()->addMinutes($index),
            'updated_at' => now()->addMinutes($index),
        ]));

        Portfolio::insert($portfolios->toArray());
        $this->call(ThumbnailSeeder::class);
    }
}
