<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Message;
use Illuminate\Http\Request;

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
        return view('client.message');
    }

    public function store(StoreMessageRequest $request)
    {
        $data = [
            'content' => $request->input('content'),
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'status' => 0,
        ];
        $stored = $this->message->store($data);
        return redirect('/messages')->with(['type' => 1, 'status' => $stored ? '留言成功!': '留言失败!']);
    }
}
