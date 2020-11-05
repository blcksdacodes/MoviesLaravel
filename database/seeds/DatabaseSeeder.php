<?php

use Illuminate\Database\Seeder;
use App\episodes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        $temp = Factory(App\episodes::class, 5)->create();

    }
}
