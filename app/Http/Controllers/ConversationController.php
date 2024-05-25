<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Conversation;
use DB;

class ConversationController extends Controller
{
    public function index()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $conversations = Conversation::where('user1_id', $userid)
        ->orWhere('user2_id', $userid)
        ->get();

      return view('conversations.index', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        $messages = $conversation->messages;

        return view('conversations.show', compact('conversation', 'messages'));
    }



    public function store(Request $request)
    {
          $this->validate(request(),[
            'user2_id'=>'required',
        ]);

          Conversation::create([
              'user1_id' => Auth::user()->id,
              'user2_id' => request('user2_id'),
              'created_at'=>carbon::now(),
              'updated_at'=>carbon::now(),

            ]);

            return back();
    }


}
