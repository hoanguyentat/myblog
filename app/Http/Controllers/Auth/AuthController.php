<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use Socialize;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function facebook()
    {
        return Socialize::with('facebook')->redirect();     
    }

    public function fbCallback()
    {   
        $user = Socialize::with('facebook')->user();
        dd($user);
        $data = ['name' => $user->name, 'email' => $user->email, 'password' => $user->token];
        if ($user->email == null){
            $data['email'] = $user->id . "@facebook.com";
        }   
        $userDB = User::where('email', $user->email)->first();
        if (!is_null($userDB)){
            Auth::login($userDB);
        }
        else{
            Auth::login($this->create($data));
        }
        return redirect()->route('/');
    }

    public function google(){
        return Socialize::with('google')->redirect();
    }

    public function ggCallback()
    {
        $user = Socialize::with('google')->user();
        $data = ['name' => $user->name, 'email' => $user->email, 'password' => $user->token];
        $userDB = User::where('email', $user->email)->first();
        if ($userDB) {
            Auth::login($userDB);
        } else{
            Auth::login($this->create($data));
        }
        return redirect()->route('get.articles');
    }
}
