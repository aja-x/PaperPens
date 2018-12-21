<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:editor')->except('logout');
        $this->middleware('guest:dosen')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email_admin'   => 'required|email',
            'password_admin' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email_admin' => $request->email_admin, 'password_admin' => $request->password_admin], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email_admin', 'remember'));
    }

    public function showEditorLoginForm()
    {
        return view('editor.login');
    }

    public function editorLogin(Request $request)
    {
        $this->validate($request, [
            'email_editor'   => 'required|email',
            'password_editor' => 'required'
        ]);

        if (Auth::guard('editor')->attempt(['email_editor' => $request->email_editor, 'password_editor' => $request->password_editor], $request->get('remember'))) {
            return redirect()->intended('/editor');
        }
        return back()->withInput($request->only('email_editor', 'remember'));
    }

    public function showDosenLoginForm()
    {
        return view('/');
    }

    public function dosenLogin(Request $request)
    {
        $this->validate($request, [
            'email_dosen'   => 'required|email',
            'password_dosen' => 'required'
        ]);

        if (Auth::guard('dosen')->attempt(['email_dosen' => $request->email_dosen, 'password_dosen' => $request->password_dosen], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email_dosen', 'remember'));
    }


}
