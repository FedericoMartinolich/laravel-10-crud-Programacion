<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assist;
use App\Models\Student;
use Illuminate\View\View;

class AssistController extends Controller
{
    public function show(Student $student) : View
    {
        $studentAssists = $student->assists;//
        //dd($student);
        return view('students.assist', [
            'assists' => $studentAssists
        ]);
    }
}
