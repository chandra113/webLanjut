<?php
namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $data = [];
        for ($i=1; $i<=10; $i++){
            $data[] = [
                'username' => $faker->username,
                'email' => $faker->email,
                'password' => password_hash('123456', PASSWORD_DEFAULT)
            ];
        }

        $this->db->table('users')->insertBatch($data);
    }
}

