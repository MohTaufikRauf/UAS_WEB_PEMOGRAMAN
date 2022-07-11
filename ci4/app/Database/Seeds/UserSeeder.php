<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'id' => '66',
			'username' => 'berlin',
			'useremail' => 'noviansyahberliana@email.com',
			'userpassword' => password_hash('berlin609', PASSWORD_DEFAULT),
		]);
	}
}