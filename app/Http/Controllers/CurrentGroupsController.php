<?php

namespace App\Http\Controllers;

use App\CurrentGroups;
use Illuminate\Http\Request;

class CurrentGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$current_groups_number = CurrentGroups::all()->count();
    	$current_groups = CurrentGroups::oldest()->get();

	    return view('admin.current-groups.index', compact('current_groups','current_groups_number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('admin.current-groups.create');
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
		    'group_name' => 'required|min:2'
	    ]);

	    CurrentGroups::create(request(['group_name', 'group_type', 'department', 'start_date', 'finish_date']));

	    return redirect('/admin/current-groups/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CurrentGroups $current_group
     * @return \Illuminate\Http\Response
     */
    public function show(CurrentGroups $current_group)
    {
        return view('admin.current-groups.show', compact('current_group'));
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
