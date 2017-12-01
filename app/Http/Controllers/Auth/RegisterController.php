<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'passport' => 'required|image|max:800'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return (new User)->create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'passport' => $data['passport']
        ]);
    }

    protected function saveFile($data){
        $file = $data['passport'];

        $file_name = Storage::disk('uploads')->put('passport', $file);

        $data['passport'] = '/uploads/' . $file_name;

        return $data;
    }

    public function index(Request $request){

        $validator = $this->validator($request->all());

        if($validator->fails()){
            return back()->with(['errors' => $validator->errors()]);
        }

        $data = $this->saveFile($request->all());

        $user = $this->create($data);

//        $this->guard()->login($user);

        Session::flash('message', "Դուք հաջողությամբ գրանցվեցիք, Դուք կարող եք մուտք գործել համակարգ օգտագործելով Ձեր Էլ. հասցեն և գաղտնաբառը, Ձեր անձնագրի տվյալների հաստատումից հետո");

        return back();
    }
}
