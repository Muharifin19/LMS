<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua course dari database
        $courses = Course::all();

        // Mengembalikan view 'home' dengan data courses
        return view('dashboard', compact('courses'));
    }
}