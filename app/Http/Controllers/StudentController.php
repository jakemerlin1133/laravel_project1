<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $data = Student::all();

        return view('index',['students' => $data]);
    }

    public function create(){
        return view('register');
    }
}
