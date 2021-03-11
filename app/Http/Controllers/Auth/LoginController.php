<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('auth.login');
        
    }

    public function store(Request $request) {

        // Validate input and make available @error in blade views
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Avoid session fixation attacks (Need to study it)
            return back()->with('status', 'Invalid login details');
        };

        return redirect()->intended();
        // return redirect()->route('post');
    }
}
