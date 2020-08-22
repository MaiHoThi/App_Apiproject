<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(ColorSeeder::class);
         $this->call(SizeSeeder::class);
         $this->call(VideoSeeder::class);

    }
}