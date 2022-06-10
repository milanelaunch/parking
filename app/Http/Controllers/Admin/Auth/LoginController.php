<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/Admin/dashboard";

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function loginPage()
    {
        return view('admin.auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );

        // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect()->intended(route('index'));
        // }
        //      return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->route('admin.login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
