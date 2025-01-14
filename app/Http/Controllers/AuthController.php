<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function signupView()
    {
        return view('auth.signup');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // If validation passes and the data is saved
            session()->flash('message', 'Login successfully!');
            session()->flash('alert-type', 'success');
            return redirect()->route('home');
        }

        // If login fails, return back with error
        return back()->withErrors(['email' => 'These credentials do not match our records.']);

    }
    public function signup(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'firstName' => 'required|string|max:50', // Required, must be a string, max length 50
            'lastName' => 'required|string|max:50',  // Required, must be a string, max length 50
            'phone' => 'required|regex:/^[0-9]{10,15}$/|unique:users,phone', // Required, numeric, 10 to 15 digits
            'email' => 'required|email|unique:users,email', // Required, valid email format, must be unique in the 'users' table
            'password' => 'required|string|min:8', // Required, must be a string, minimum 8 characters
            'confirm_password' => 'required|same:password', // Required, must match the 'password' field
        ]);

        $user = new User;

        $user->name = $request->firstName . ' ' . $request->lastName;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if (!$user->save()) {
            return back()->with('failed', 'Something went wrong!');
        }

        session()->flash('message', 'Register successfully and login!');
        session()->flash('alert-type', 'success');

        Auth::login($user);
        return redirect()->route('home');
    }



    public function logout()
    {
        Auth::logout();
        session()->flash('message', 'Logout Successfully!');
        session()->flash('alert-type', 'success');

        return redirect()->route('home');
    }
}
