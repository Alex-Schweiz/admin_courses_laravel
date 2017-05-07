<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$teachers_number = Teacher::latest()->count();
	    $teachers = Teacher::oldest()->get();

	    return view('admin.teachers.index', compact('teachers', 'teachers_number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $this->validate(request(),[
		    'name' => 'required|min:2',
		    'salary' => 'required|min:2',
	    ]);

    	  Teacher::create(request(['name', 'date_of_birth', 'gender', 'email', 'phone', 'address',
		      'notes', 'department', 'occupation', 'date_of_joining', 'salary']));

        return redirect('/admin/teachers/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
    	$own_groups = $teacher->current_groups()->count();
	    $own_awards = $teacher->awards()->count();
	    return view('admin.teachers.show', compact('teacher', 'own_groups', 'own_awards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
