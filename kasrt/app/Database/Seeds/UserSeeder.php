<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
		'username' => 'alif',
		'useremail' => 'aliffahmi@gmail.com',
		'userpassword' => password_hash('alif123', PASSWORD_DEFAULT),
		]);
    }
}
