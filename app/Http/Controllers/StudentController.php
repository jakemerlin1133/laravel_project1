<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){

        $data = Student::all();

        return view('index',['students' => $data]);
    }

    public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/homepage');
        }

        return back()->withErrors(['email' => 'Login Failed.'])->onlyInput('email');
    }

    public function register(){
        return view('register');
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

       return redirect('/');
    }

    public function homepage(){
        return view('homepage');
    }
}
