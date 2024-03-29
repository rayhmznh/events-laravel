<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/dashboard';
    public function redirectTo() {
      $role = Auth::user()->roles; 
        switch ($role) {
          case 'ADMIN':
            return '/dashboard-admin';
            break;
          case 'USER':
            return '/dashboard';
            break; 
          default:
            return '/'; 
          break;
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout()
  {
    auth()->logout();

    request()->session()->regenerate();
    request()->session()->regenerateToken();

    return redirect()->to('/')->with('success', 'Log out successfully!');
  }
}
