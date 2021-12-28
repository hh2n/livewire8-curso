<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        $courses = Courses::latest()->with('user')->take(9)->get();
        return view('livewire.course-list', compact('courses'));
    }
}
