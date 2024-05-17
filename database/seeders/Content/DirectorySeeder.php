<?php

namespace Database\Seeders\Content;

use App\Models\Content\{Page, Directory};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            // id, name, directory_id, deepth
            ['661c78c1-8e46-408f-baec-606d22b188b0', 'About Us'],
            ['5298b484-4799-4ae7-a03a-6456de906b59', 'Contact Us'],
            ['12f87012-8f3c-4f70-8b96-e31cd7628fc3', 'Project'],
            ['09d52d06-1fce-4364-a8d0-ef15c5f34cd0', 'Blog'],
            ['3cb496aa-74cf-4ca0-8df5-4602674ee269', 'Certificate'],
            ['9f9c3f33-8c0a-4d95-bcbd-1e8116787a2d', 'Service'],
            ['9210c788-75a8-4717-a2b9-034c68749100', 'Client'],
        ];

        $sections = [
            // id, name, directory_id, deepth
            [null, 'Overview', '661c78c1-8e46-408f-baec-606d22b188b0', 1],
            [null, 'Our Visions', '661c78c1-8e46-408f-baec-606d22b188b0', 1],
            [null, 'Our Missions', '661c78c1-8e46-408f-baec-606d22b188b0', 1],
            [null, 'Contact', '5298b484-4799-4ae7-a03a-6456de906b59', 1],
        ];

        Directory::insert($this->transform($pages));
        Directory::insert($this->transform($sections));
    }


    /**
     * Converts array data to an array of required fields
     * 
     * @return array
     */
    public function transform($data)
    {
        $result     = collect([]);
        $increment  = 0;

        foreach ($data as $item) {
            $result->push([
                'id'            => $item[0] ?? Str::uuid(),
                'directory_id'  => $item[2] ?? null,
                'name'          => $item[1],
                'codename'      => Str::camel($item[1]),
                'order'         => $increment + 1,
                'depth'         => $item[3] ?? 0,
                'created_at'    => now()->addSeconds($increment),
                'updated_at'    => now()->addSeconds($increment++),
            ]);
        }

        return $result->toArray();
    }
}
