<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard1.add-department');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $department = new Department;
        $department->dep_name = $request->dep_name;
        $department->dep_details = $request->dep_details;
       
        $department->save();
        return redirect('all-departments')->with('message','Department created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
       

        $departments = Department::orderBy('created_at', 'DESC')->paginate(7);
       
        return view('dashboard1.all-departments',compact('departments'))->with([
         'departments' => $departments,
         
     ]);
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
        $departments = Department::find($id);
        return view('dashboard1.departmentedit',compact('departments'));
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
        $department = Department::find($id);
        $department->dep_name = $request->dep_name;
        $department->dep_details = $request->dep_details;
      
        $department->save();
        return redirect('all-departments')->with('message','Department details updated successfully');

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

        $department = Department::find($id);
        $department->delete();
        return redirect('all-departments')->with('message1','Department deleted from database');

    }
}
