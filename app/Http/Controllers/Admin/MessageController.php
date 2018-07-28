<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //
    /**
     * @var Message
     */
    private $message;

    /**
     * MessageController constructor.
     * @param Message $message
     */
    public function __construct(Message $message)
    {

        $this->message = $message;
    }

    public function index(Request $request)
    {
        $map = [];
        $messages = $this->message->fetchList($map, $request->input('size', 30));
        return view('admin.messages', compact('messages'));
    }
}
