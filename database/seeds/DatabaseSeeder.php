<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
	}
	
	private function UserTableSeeder()
	{
		$user = new User;
		
		$user->name = 'Miguel Gouveia2';
		$user->email = 'miguelbgouveia2@hotmail.com';
		$user->password = '123456';
		
		$user->save();
		
	}

}
