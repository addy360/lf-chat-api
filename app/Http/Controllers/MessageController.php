<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function onMessage(Request $request)
    {
        $validated = $request->validate([
            "message" => ['required'],
            "to_user" => ['required'],
            "from_user" => ['required']
        ]);

        $message = Message::create($validated);

        MessageEvent::dispatch(json_encode($message));
    }
}
