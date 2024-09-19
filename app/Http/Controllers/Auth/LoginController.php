<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function username()
    {
        return 'username';
    }
    
  
public function attemptLogin(Request $request)
  {
    $credentials = $this->credentials($request);
    
      if ($this->guard()->attempt($credentials, $request->boolean('remember'))) 
    {
        $user = $this->guard()->user();
        if ($user->active === 1)
        {
            if ($user->email_verified_at !== null) { 
                return true; 
            } else {
                $this->guard()->logout();
                return false; 
            }
            } else { 
            $this->guard()->logout();
            return false; 
        }
    }

    return false;
  }
  
  public function authenticated(Request $request, $user)
  {
      if ($user->active == 1) 
      {
          return redirect()->route('user.index');
      }

      return redirect()->route('index');
  }

      
}
