<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\TeacherDepartment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $message="alaa new not";
        $user=User::find(Auth::id());
        $submit=TeacherDepartment::where('user_id',Auth::id())->first();
        event(new ChatEvent($request->message,$submit));
    }
}
