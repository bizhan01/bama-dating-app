<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Conversation $conversation, Request $request)
    {
        $message = Message::create([
            'conversation_id' => $request->input('conversation_id'),
            'user_id' => Auth::user()->id,
            'content' => $request->input('content'),
        ]);

        return back();
    }
}
