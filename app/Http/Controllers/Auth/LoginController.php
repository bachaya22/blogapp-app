<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show login form for all users (default)
    public function showLoginForm()
    {
        return view('auth.login'); // Default login view
    }

    // Show login form for Admin
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']); // Separate admin login form
    }

    // Show login form for Writer
    public function showWriterLoginForm()
    {
        return view('auth.login', ['url' => 'writer']); // Separate writer login form
    }

    // Admin Login Logic
    public function adminLogin(Request $request)
    {
        // dd('1');
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // dd('2');
        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // dd('3');
         return view('admin');
        }
// dd('4');
        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'Invalid admin credentials.',
        ]);
    }

    // Writer Login Logic
    public function writerLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('writer')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->intended('/writer');
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'Invalid writer credentials.',
        ]);
    }

    // Logout function
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
