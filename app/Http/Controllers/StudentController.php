<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Branch;


class StudentController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $courses = Course::all();
        $branches = Branch::all();
        return view('dashboard.studentregister',compact(['courses','branches']));
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
        $student = new Student;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->coursename = $request->coursename;
        //$student->branchid = $request->branchid;
        $student->phone_number = $request->phone_number;
        $student->address = $request->address;
        $student->save();
       

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
        $students = Student::paginate(200);
        return view('dashboard.students-table',compact('students'));
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
        $students = Student::find($id);
        return view('dashboard.studentedit',compact('students'));
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
        $student = student::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        
        $student->phone_number = $request->phone_number;
        $student->address = $request->address;
        $student->save();
        return redirect('students-list');
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
    public function courses(Request $request){
        $id = $request->id;
        $data['courses'] = Course::where('branchid',$id)->get();
        echo json_encode($data);
    }
}
