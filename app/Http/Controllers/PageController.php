<?php

namespace App\Http\Controllers;

use App\Events\ClientSendMessage;
use App\Message;
use App\Work;
use Illuminate\Http\Request;



class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function portfolio()
    {
        $works = Work::all();
        return view('pages.portfolio', compact('works'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        $message = Message::create($request->all());

        event( new ClientSendMessage($message) );

        session()->flash('status', 'dispatch-message');

        return redirect('/');
    }
}
