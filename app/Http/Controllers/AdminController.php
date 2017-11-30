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

        $user = User::find($id);

        $to = $user->email;

        Mail::send('email.activate', ['title' => 'Ձեր պրոֆիլն ակտիվացված է' , 'user_name' => $user->name . ' ' . $user->surname], function ($message) use ($to)
        {
            $message->from('freedomroad@winston.am', 'Winston');
            $message->subject('Winston.am registration confirmation');
            $message->to($to);
        });

        return back();
    }

    public function deactivate(Request $request, $id){
        User::where('id', $id)->update(['active' => 0]);
        return back();
    }

    public function delete(Request $request, $id){
        $user = User::find($id);

        $to = $user->email;

        Mail::send('email.delete', ['user_name' => $user->name . ' ' . $user->surname], function ($message) use ($to)
        {
            $message->from('freedomroad@winston.am', 'Winston');
            $message->subject('Winston.am registration confirmation');
            $message->to($to);
        });

        $user->delete();

        return back();
    }
}
