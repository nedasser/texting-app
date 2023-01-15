<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class CreateMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
               'conversation_id'=>'1',
               'user_from_id'=>'1',
               'message'=>'Test',
               'status'=>'1',
            ],
            [
                'conversation_id'=>'1',
                'user_from_id'=>'2',
                'message'=>'Test',
                'status'=>'0',
            ],
        ];
        foreach ($messages as $key => $message) {
            Message::create($message);
        }
    }
}
