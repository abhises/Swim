<?php

use App\Competition;
use App\Game;
use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game=Game::create([
         //    'competition_id'=>function(){
         //    return Competition::all()->random();
         // },
        	'name'=>'lacup',
        	'start_date'=>'12',
        	'end_date'=>'01'
		]);

		 $game=Game::create([
         //    'competition_id'=>function(){
         //    return Competition::all()->random();
         // },
        	'name'=>'linconcup',
        	'start_date'=>'12',
        	'end_date'=>'01'
		]);

		  $game=Game::create([
         //   'competition_id'=>function(){
         //    return Competition::all()->random();
         // },
        	'name'=>'macchapuchrecup',
        	'start_date'=>'12',
        	'end_date'=>'01'
		]);
    }
}
