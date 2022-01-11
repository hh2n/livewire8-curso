<?php

namespace App\Http\Controllers;
use App\Models\Courses;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function course(Courses $course)
    {
        return view('course', compact('course'));
    }
}
