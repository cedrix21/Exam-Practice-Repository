<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function create()
    {
        return view ('layout.create');
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

        return redirect()->route('welcome')->with('success', 'Student created Successfully');
    }
}
