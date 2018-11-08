<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil Class User dari file UserTableSeeder
        $this->call(UserTableSeeder::class);
        // Memanggil class spl dari file SplTableSeeder
        $this->call(SplTableSeeder::class);
    }
}
