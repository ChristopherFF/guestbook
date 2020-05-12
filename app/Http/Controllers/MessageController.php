<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Message;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

//    public function __construct()
//    {
//        $this->authorizeResource(Message::class, 'messages');
//    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreMessageRequest $request)
    {

        $message = new Message();

        $message->message = $request->input('message');
        $message->user_id = Auth::user()->id;
        $message->save();

        return redirect('messages');
    }

    /**
     * Display the specified resource.
     *
     * @param Message $message
     * @return Response
     */
    public function show(Message $message)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Message $message
     * @return Response
     */
    public function edit(Message $message)
    {
        $this->authorize('update', Message::find($message->id));

        return view('message.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Message $message
     * @return void
     * @throws AuthorizationException
     */
    public function update(StoreMessageRequest $request, Message $message)
    {
        $this->authorize('update', Message::find($message->id));

        $message->message = $request->input('message');
        $message->save();

        return redirect('messages');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Message $message
     * @return void
     * @throws AuthorizationException
     */
    public function destroy(Message $message)
    {
        $this->authorize('delete', Message::find($message->id));

        $message->delete();

        return redirect('messages');
    }
}
