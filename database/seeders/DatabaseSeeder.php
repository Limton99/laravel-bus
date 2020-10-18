<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruises')->insert([
            [
                'name'=>'Асыката-Алматы',
                'departure_date'=>'06.02.2020 Thu 18:39',
                'arrival_date'=>'07.02.2020 Fri 06.10',
                'bus'=>'YUTONG',
                'capacity'=>'32',
                'bus_number'=>'KZ 888 KN 02',
                'image'=>'images/Schermata-2019-12-06-alle-09.59.28.png',
            ],
            [
                'name'=>'Шымкент-Алматы',
                'departure_date'=>'08.02.2020 Thu 18:52',
                'arrival_date'=>'09.02.2020 Fri 06.22',
                'bus'=>'MERCEDES',
                'capacity'=>'42',
                'bus_number'=>'KZ 777 KN 02',
                'image'=>'images/bus2.jpg',

            ],
            [
                'name'=>'Тараз-Алматы',
                'departure_date'=>'07.02.2020 Thu 15:52',
                'arrival_date'=>'08.02.2020 Fri 03.22',
                'bus'=>'MERCEDES',
                'capacity'=>'48',
                'bus_number'=>'KZ 789 KN 02',
                'image'=>'images/bus3.jpg',

            ],
        ]

        );
    }
}
