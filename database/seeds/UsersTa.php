<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                User::Create({
        		'name' 		=> 'Gabriel Silva',
        		'email' 	=> 'gabrielthe13@hotmail.com',
        		'password' 	=> bcrypt('123'),
        	)};
    }
}
