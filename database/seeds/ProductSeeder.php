<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<4;$i++){
        DB::table('products')->insert(
                [
                    'name'=>'Áo dài ',
                    'image'=>'/storage/public/a1.jpg',
                    'code'=>$faker->numberBetween(100,400),
                    'old_price'=>$faker->numberBetween(300,500),
                    'price'=>$faker->numberBetween(100,300),
                    'detail'=>'',
                    'category_id'=>3
                ]
        );
    }
   
    for($i=0;$i<4;$i++){
        DB::table('products')->insert(
                [
                    'name'=>'Lạng mãng',
                    'image'=>'/storage/public/a5.jpg',
                    'code'=>$faker->numberBetween(100,400),
                    'old_price'=>$faker->numberBetween(300,500),
                    'price'=>$faker->numberBetween(100,300),
                    'detail'=>'',
                    'category_id'=>1
                ]
        );
    }
    
    for($i=0;$i<4;$i++){
        DB::table('products')->insert(
                [
                    'name'=>'Thiệp mời điện tử',
                    'image'=>'/storage/public/t1.png',
                    'code'=>$faker->numberBetween(100,400),
                    'old_price'=>$faker->numberBetween(300,500),
                    'price'=>$faker->numberBetween(100,300),
                    'detail'=>'',
                    'category_id'=>2
                ]
        );
    }
    for($i=0;$i<4;$i++){
        DB::table('products')->insert(
                [
                    'name'=>'Thiệp mời điện tử',
                    'image'=>'/storage/public/t2.png',
                    'code'=>$faker->numberBetween(100,400),
                    'old_price'=>$faker->numberBetween(300,500),
                    'price'=>$faker->numberBetween(100,300),
                    'detail'=>'',
                    'category_id'=>2
                ]
        );
    }
    }
}
