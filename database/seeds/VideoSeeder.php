<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<4;$i++){
            DB::table('videos')->insert(
                    [
                        'name'=>'Lạng mãng',
                        'video'=>'/storage/public/vd1.mp4',
                        'code'=>$faker->numberBetween(100,400),
                        'old_price'=>$faker->numberBetween(300,500),
                        'price'=>$faker->numberBetween(100,300),
                        'detail'=>'',
                        'category_id'=>2
                    ]
            );
        }
        for($i=0;$i<4;$i++){
            DB::table('videos')->insert(
                    [
                        'name'=>'Lạng mãng',
                        'video'=>'/storage/public/vd2.mp4',
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
