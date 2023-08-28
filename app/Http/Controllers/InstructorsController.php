<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorsController extends Controller
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
        return view('dashboard1.add-instructor');
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
        $sokoinstructor = new Instructor;
        $sokoinstructor->first_name = $request->first_name;
        $sokoinstructor->last_name = $request->last_name;
        $sokoinstructor->email = $request->email;
        $sokoinstructor->gender = $request->gender;
        $sokoinstructor->joining_date = $request->joining_date;
        $sokoinstructor->gender = $request->gender;
       
        $sokoinstructor->designation = $request->designation;
        //$student->coursename = $request->coursename;
       // $student->branchid = $request->branchid;
        $sokoinstructor->phone_number = $request->phone_number;
        $sokoinstructor->address = $request->address;
        $sokoinstructor->save();
        return redirect('all-instructors')->with('message','Instructor added successfully');
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
        $sokoinstructors = Instructor::orderBy('created_at', 'DESC')->paginate(7);
       
        return view('dashboard1.all-instructors',compact('sokoinstructors'))->with([
         'sokoinstructors' => $sokoinstructors,
         
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
        $sokoinstructors = Instructor::find($id);
        return view('dashboard1.sokoinstructoredit',compact('sokoinstructors'));
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
        $sokoinstructor = Instructor::find($id);
        $sokoinstructor->first_name = $request->first_name;
        $sokoinstructor->last_name = $request->last_name;
        $sokoinstructor->email = $request->email;
       
        $sokoinstructor->joining_date = $request->joining_date;
       
        $sokoinstructor->designation = $request->designation;
        //$student->coursename = $request->coursename;
       // $student->branchid = $request->branchid;
        $sokoinstructor->phone_number = $request->phone_number;
        $sokoinstructor->address = $request->address;
        $sokoinstructor->save();
        return redirect('all-instructors')->with('message','Instructor details updated successfully');
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
        $sokoinstructor = Instructor::find($id);
        $sokoinstructor->delete();
        return redirect('all-instructors')->with('message1','Instructor deleted from database');
    }
}
