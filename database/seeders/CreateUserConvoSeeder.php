<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_conversation;

class CreateUserConvoSeeder extends Seeder
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
               'user_id'=>'1',
               'conversation_id'=>'1',
            ],
            [
                'user_id'=>'2',
                'conversation_id'=>'1',
            ],
        ];
    
        foreach ($users as $key => $user) {
            User_conversation::create($user);
        }
    }
}
