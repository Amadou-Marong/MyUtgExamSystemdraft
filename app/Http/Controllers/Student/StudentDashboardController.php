<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class StudentDashboardController extends Controller
{
    public function dashboard(){
        return Inertia::render('Student/Dashboard');
        // return "adminpage";
    }
}
