<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Zones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zones = [
            [
                'id' => 1,
                'name' => 'Evergreen',
                'campsite' => [
                    [

                    ]
                ]
            ]
        ];

    }
}
