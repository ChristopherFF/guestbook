<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReplyRequest;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($message_id)
    {
        return view('reply.create', compact('message_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreReplyRequest $request
     * @return Response
     */
    public function store(StoreReplyRequest $request)
    {

        $reply = new Reply();

        $reply->reply = $request->input('reply');
        $reply->user_id = Auth::user()->id;
        $reply->message_id = $request->input('message_id');

        $reply->save();

        return redirect('messages');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return Response
     */
    public function show(Reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Reply  $reply
     * @return Response
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return Response
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
