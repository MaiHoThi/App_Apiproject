<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->insert([
            [
                'name'=> $faker->name,
                'image'=>'/storage/public/a1.jpg',
                'email'=>'maiho@gmail.com',
                'password'=>Hash::make('admin'),
                'role'=>'admin'
            ],
            [
                'name'=> $faker->name,
                'image'=>'/storage/public/a2.jpg',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('admin'),
                'role'=>'user'
            ]
        ]);
    }
}
