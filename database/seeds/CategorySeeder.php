<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>"Chụp ảnh",
            ],
            [
                'name'=>"Thiếp mời",
            ],
            [
                'name'=>"Thuê áo cưới",
            ]
        ]);
    }
}
