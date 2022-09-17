<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function receiveMessage(Request $request)
    {
        $message = $request->input('message');
        return response()->json($message, 200);
    }
}