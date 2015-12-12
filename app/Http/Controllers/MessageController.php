<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    public function __construct(\App\Message $message)
    {
        $this->$message = $message;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = Message::all();

        return view('pages.home')->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message;

        $id = md5(($request->input('message_title')) . ($request->input('message_content')));

        $message->message_id = $id;

        $message->message_title = $request->input('message_title');

        $message->message_content = $request->input('message_content');

        $message->save();

        return view('pages.home');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('pages.show')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        //TODO Destroy First
        $input = $request->all();

        $input->fill($input)->save();
        return view('pages.home')->with('status', '文章编辑成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);

        $message->delete();

        return view('pages.home')->with('status', '文章删除成功');
    }
}
