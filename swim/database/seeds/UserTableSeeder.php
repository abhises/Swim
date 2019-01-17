<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::create([
        	'name'=>'SuperAdmin',
        	'description'=>'This is SuperAdmin Table'

        ]);

        $role=Role::create([
        	'name'=>'Admin',
        	'description'=>'This is admin table'
        ]);

        $user=User::create([
        	'role_id'=>'1',
        	'firstname'=>'abhise',
            'email'=>'abhises@gmail.com',
            'name'=>'abhises',
            'password'=>bcrypt('abhises'),


        ]);
         $user=User::create([
        	'role_id'=>'2',
        	'firstname'=>'abhise',
            'email'=>'abhisespoudyal@gmail.com',
            'name'=>'abhises',
            'password'=>bcrypt('abhises'),
        	

        ]);
    }
}
