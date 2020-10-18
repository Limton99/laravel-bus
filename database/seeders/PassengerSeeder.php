<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passengers')->insert([
            [
                'name'=>'Alisa',
                'phone_number'=>'+77777777777',
                'email'=>'alisa@gmail.com',
                'place'=>'1 A',
                'price'=>'2000',
                'cruise_id'=>1
            ],
            [
                'name'=>'Aruzhan',
                'phone_number'=>'+77777777778',
                'email'=>'aruzhan@gmail.com',
                'place'=>'1 B',
                'price'=>'2500',
                'cruise_id'=>1
            ],
            [
                'name'=>'ZHanna',
                'phone_number'=>'+77777777774',
                'email'=>'zhanna@gmail.com',
                'place'=>'0 A',
                'price'=>'2000',
                'cruise_id'=>1
            ],
            [
                'name'=>'Melisa',
                'phone_number'=>'+77777777773',
                'email'=>'melisa@gmail.com',
                'place'=>'1 C',
                'price'=>'2000',
                'cruise_id'=>1
            ]
        ]);
    }
}
