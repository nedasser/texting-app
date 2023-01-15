<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Conversation;
use App\Models\User_conversation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function profile()
    {
        return view('user.profile');
    }
    public function conversations()
    {
        $data = array();
        $user_id = Auth::id();
        $conv_id =  User_conversation::select('conversation_id')->where('user_id',$user_id)->get();
        foreach ($conv_id as $conversation)
        {
            $users_id = User_conversation::select('user_id')->where('conversation_id',$conversation->conversation_id)->where('user_id','!=',$user_id)->get();
            foreach($users_id as $users)
            {
                $user = User::where('id',$users->user_id)->get();
                
            }
        }
        return view('user.conversations',compact('user'));
    }
}
