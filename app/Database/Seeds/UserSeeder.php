<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'markbarsaga121@gmail.com',
            'password' => password_hash('12345', PASSWORD_BCRYPT), // Ensure to hash the password
            // You can add 'picture' and 'bio' fields if necessary
        ];

        // Using the Query Builder
        $this->db->table('users')->insert($data);
    }
}
