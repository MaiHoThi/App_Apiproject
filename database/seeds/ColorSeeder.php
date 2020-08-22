<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('colors')->insert([
            [
                'color'=>'Hồng'
            ],
            [
                'color'=>'Đỏ'
            ],
            [
                'color'=>'Trắng'
            ]
        ]);
    }
}
