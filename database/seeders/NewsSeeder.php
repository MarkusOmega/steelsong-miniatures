<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsHiglights = [
            [
                'name' => 'Higlight 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum in ex nec blandit. Nunc efficitur ligula diam, at accumsan nulla mattis sed. Vestibulum eget bibendum sem. ',
                'highlight' => true,
                'order' => 1,
            ],
            [
                'name' => 'Welcome to Steelsong Miniatures',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum in ex nec blandit. Nunc efficitur ligula diam',
                'highlight' => true,
                'order' => 2,
            ],
            [
                'name' => 'Steelsong Miniatures',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => true,
                'order' => 3,
            ],
        ];

        foreach($newsHiglights as $newsHiglight){
            News::create([
                'name'          => $newsHiglight['name'],
                'description'   => $newsHiglight['description'],
                'highlight'         => $newsHiglight['highlight'],
                'order'         => $newsHiglight['order'],
            ]);
        }

        $newsItems = [
            [
                'name' => 'Newsitem 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum in ex nec blandit. Nunc efficitur ligula diam, at accumsan nulla mattis sed. Vestibulum eget bibendum sem. ',
                'highlight' => false,
                'order' => 1,
            ],
            [
                'name' => 'Newsitem 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dictum in ex nec blandit. Nunc efficitur ligula diam',
                'highlight' => false,
                'order' => 2,
            ],
            [
                'name' => 'Newsitem 3',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 3,
            ],
            [
                'name' => 'Newsitem 4',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 4,
            ],
            [
                'name' => 'Newsitem 5',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 5,
            ],
            [
                'name' => 'Newsitem 6',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 6,
            ],
            [
                'name' => 'Newsitem 7',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 7,
            ],
            [
                'name' => 'Newsitem 8',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 8,
            ],
            [
                'name' => 'Newsitem 9',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 9,
            ],
            [
                'name' => 'Newsitem 10',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 10,
            ],
            [
                'name' => 'Newsitem 11',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 11,
            ],
            [
                'name' => 'Newsitem 12',
                'description' => 'Lorem ipsum dolor sit amet,',
                'highlight' => false,
                'order' => 12,
            ],
        ];

        foreach($newsItems as $newsItem){
            News::create([
                'name'          => $newsItem['name'],
                'description'   => $newsItem['description'],
                'highlight'     => $newsItem['highlight'],
                'order'         => $newsItem['order'],
            ]);
        }
    }
}
