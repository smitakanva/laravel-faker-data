<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
        {
            $data = Student::paginate(10);

            return view('students', compact('data'));
        }
    
}
