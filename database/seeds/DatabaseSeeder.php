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
         $this->call(UserTableSeeder::class);
    	 factory(App\Group::class,5)->create();
         factory(App\Swimmer::class,5)->create();
         factory(App\Swimmingpool::class,4)->create();
         $this->call(GameTableSeeder::class);
         factory(App\Competition::class,4)->create();
         factory(App\Target_time::class,4)->create();
          //factory(App\Game::class,4)->create();

    }
}
