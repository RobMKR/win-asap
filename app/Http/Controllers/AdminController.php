<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Mail;

class AdminController extends Controller
{

    public function dashboard(){
        $users = User::where('email', '!=', 'superadmin@mail.com')->paginate(30);

        return view('admin.dashboard')->with(['users' => $users]);
    }

    public function activate(Request $request, $id){
        User::where('id', $id)->update(['active' => 1]);

        $to = User::find($id)->email;

        Mail::send('email.activate', ['title' => 'Ձեր պրոֆիլն ակտիվացված է'], function ($message) use ($to)
        {
            $message->from('freedomroad@winston.am', 'Winston');
            $message->subject('Freedom Road');
            $message->to($to);
        });

        return back();
    }

    public function deactivate(Request $request, $id){
        User::where('id', $id)->update(['active' => 0]);
        return back();
    }
}
