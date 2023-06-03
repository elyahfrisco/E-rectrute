<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;


class ConversationController extends Controller

{

    
    public function index()

    {
         
        
        // dans la classe User:

        // public function conversations()

        // {
        //     return Conversation::where(function($q){
                
        //         return $q->where('to', $this->id)
        //         ->orWhere('from', $this->id);
    
        //     });
        // }
    
       $conversations = auth()->user()->conversations()->latest()->get();

 

     return view('conversations.index', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        return view('conversations.show', compact('conversation'));
    }
}
