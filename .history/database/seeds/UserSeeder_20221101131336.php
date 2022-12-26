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
            [
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'level'=>'admin',
            'password'=>bcrypt('admin456')
        ],
        [
            'username' => 'user',
            'name' => 'editor',
            'email' => 'editor@mail.com',
            'level'=>'editor',
            'password'=>bcrypt('editAha234')
        ]
           
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
