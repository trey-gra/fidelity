<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailboxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMailBox()
    {
        //echo "Good";
        return view('mails.mailbox', ['mails' => \App\mail::orderBy('status', 'created_at')->get()] );
    }

    public function readMessage($id){
        //Set message from unread to 
        $msg = \App\mail::find($id);
        $msg->status = false;
        $msg->update();

        return View('mails.viewMessage', ['message' => $msg] );
        //Show view message screen
    }

    public function saveMessage(Request $req){
        try {
            $msg = new \App\mail;
            $msg->name = $req->name;
            $msg->tele = $req->tel;
            $msg->email = $req->email;
            $msg->detail = $req->detail;
            $msg->save();
            return view('mail_response');
        } catch (Exception $e) {
            echo $e;
        }
    }
}
