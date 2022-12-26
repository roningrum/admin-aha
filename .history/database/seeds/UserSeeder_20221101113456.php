<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'level'=>'admin',
            'password'=>bcrypt('admin456')
        ]
    }
}
