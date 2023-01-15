<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'firstName'=>'Administratorius',
               'lastName'=>'Administratorius',
               'email'=>'admin@textapp.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'firstName'=>'Vartotojas',
               'lastName' =>'Vartotojas',
               'email'=>'user@textapp.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
