<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\View;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $this->incrementLoginAttempts($request);
            return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors([
                        'email' => 'Account not found.',
                    ]);
        }

        // if ($user->status == 0) {
        //     $this->incrementLoginAttempts($request);
        //     return redirect()->back()
        //             ->withInput($request->only('email'))
        //             ->withErrors([
        //                 'email' => 'Your account is inactive',
        //             ]);
        // }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            // 'status' => 1
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);

    }
}
