<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mailbox;

class MailboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = Mailbox::all();
        return view('mailbox.index')->with('boxList', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mailbox.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'smtp_server' => 'required',
            'smtp_port' => 'required|integer|min:1000|max:65535',
            'pop3_server' => 'required',
            'pop3_port' => 'required|integer|min:1000|max:65535',
            'login_mail' => 'required|email',
            'password' => 'required|between:6,20'
        ], [
            'smtp_port.required' => 'Pole określające port SMTP jest wymagane'
        ]);

        return 123;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $box = Mailbox::find($id);
        return view('mailbox.show')->with('mailbox', $box);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
