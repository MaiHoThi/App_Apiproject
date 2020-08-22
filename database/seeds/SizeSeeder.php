<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'size'=>'32'
            ],
            [
             'size'=>'33'
            ],
            [
             'size'=>'34'
            ],
         [
             'size'=>'35'
         ],
         [
             'size'=>'Larg size'
         ]
        ]);
    }
}
