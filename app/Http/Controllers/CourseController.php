<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses = Course::all();
        return Inertia::render('Courses/Index', [
            'courses' => $courses
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Courses/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    public function store(Request $request, Course $course)
    {
        //
        $course = Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course created successfully!');

        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'content' => 'required'
        // ]);
        // Course::create([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);
        // sleep(1);

        // return redirect()->route('courses.index')->with('message', 'Course Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
        return Inertia::render(
            'Courses/Edit',[
                'course' => $course
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    public function update(Request $request, Course $course)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required'
        ]);

        $course->title = $request->title;
        $course->content = $request->content;
        $course->save();
        sleep(1);

        return redirect()->route('courses.index')->with('message', 'Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    public function destroy(Course $course)
    {
        //
        $course->delete();
    }
}
