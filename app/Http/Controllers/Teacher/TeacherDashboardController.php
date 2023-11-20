<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class TeacherDashboardController extends Controller
{
    public function dashboard(){
        return Inertia::render('Teacher/Dashboard');
        // return "adminpage";
    }
}
