<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('welcome');
    }

    public function create()
    {
        $studs = Student::all();
        return view ('layout.create',[
            'studs' => $studs,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'address' => 'required|string',
            'gender' => 'required|string',
        ]);

        Student::create($validated);
        return redirect()->route('student.create')->with('success', 'Student created successfully.');
    }
}
