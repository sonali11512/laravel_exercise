<?php

use Illuminate\Database\Seeder;

class RouterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Router::class,10)->create();
    }
}
