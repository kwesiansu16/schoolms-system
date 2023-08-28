<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholar;
use Carbon\Carbon;
use App\Program;
use App\Department;
use App\Fee;
use Illuminate\Support\Facades\File;


class StudentsController extends Controller
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
       

        $programs = Program::all();
        $departments = Department::all();
        return view('dashboard1.add-student',compact(['programs','departments']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request){

        $request->validate([

            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' =>'required|email',
            'gender' => 'required',
            'registration_date' => 'required',
            'birth_date' => 'required',
           'completion_date' => 'required',
        
         'phone_number' => 'required|min:10',
         'address' => 'required',
      

        ]);
       $sokostudent = new Scholar([

        'first_name'  => $request['first_name'],
        'last_name'  => $request['last_name'],
        'email'  => $request['email'],
        'gender'  => $request['gender'],
        'registration_date'  => $request['registration_date'],
        'birth_date'  => $request['birth_date'],
        'completion_date'  => $request['completion_date'],
        
        'phone_number'  => $request['phone_number'],
        'address'  => $request['address'],
      



       ]);
       
       $sokostudent->programname = $request->programname;

       if($request->hasfile('image'))
       {
           $file = $request->file('image');
           $extenstion = $file->getClientOriginalExtension();
           $filename = time().'.'.$extenstion;
           $file->move('uploads/students/', $filename);
           $sokostudent->image = $filename;
       }
      // $sokostudent->image = $request->file('image')->getClientOriginalName();
      // $request->image->move(public_path('postimg'),$sokostudent->image);
       $sokostudent->save();
     
       return redirect('all-students')->with('message','Student added successfully');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //Hobby::orderBy('created_at','DESC')
      //  $hobbies = Hobby::orderBy('created_at','DESC')->paginate(8);
       $sokostudents = Scholar::orderBy('created_at', 'DESC')->paginate(300);
       
       return view('dashboard1.all-students',compact('sokostudents'))->with([
        'sokostudents' => $sokostudents,
        
    ]);
      // compact('sokostudents')
    }

    public function show_transactions()
    {
        //Hobby::orderBy('created_at','DESC')
      //  $hobbies = Hobby::orderBy('created_at','DESC')->paginate(8);
       $sokostudents_amounts = Fee::orderBy('created_at', 'DESC')->paginate(6);
       
       return view('dashboard1.all-transactions',compact('sokostudents_amounts'))->with([
        'sokostudents_amounts' => $sokostudents_amounts,
        
    ]);
      // compact('sokostudents')
    }

    public function single_student(Request $request){
        $id = $request->id;
        $sokostudents = Scholar::where(['id'=>$id])->get();
        //print_r($student[0]['id']);exit();
        return view('dashboard1.student-profile',compact('sokostudents'));
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
        $sokostudents = Scholar::find($id);
        return view('dashboard1.sokostudentedit',compact('sokostudents'));
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
        $sokostudent = Scholar::find($id);
        $sokostudent->first_name = $request->first_name;
        $sokostudent->last_name = $request->last_name;
        $sokostudent->email = $request->email;
      
        $sokostudent->registration_date = $request->registration_date;
       
        $sokostudent->completion_date = $request->completion_date;
       

      
       // $student->branchid = $request->branchid;
        $sokostudent->phone_number = $request->phone_number;
        $sokostudent->address = $request->address;
        if($request->hasfile('image'))
        {
            $destination = 'uploads/students'.$sokostudent->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
            $sokostudent->image = $filename;
        }
        $sokostudent->save();
      
        return redirect('all-students')->with('message','Student details updated successfully');
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
        $sokostudent = Scholar::find($id);
        $sokostudent->delete();
        return redirect('all-students')->with('message1','Student deleted from database');
    }

    public function courses(Request $request){
        $id = $request->id;
        $data1['programs'] = Program::where('departmentid',$id)->get();
        echo json_encode($data1);
    }

    public function fee_form(Request $request){
        $id = $request->id;
        $fee = Fee::where(['sokostudent_id'=>$id])->get();
        return view('dashboard1.fee-form',compact(['fee','id']));


    }

    public function feeadd(Request $request){
        $fee = new Fee;
        $id = $request->id;
        $fee->sokostudent_id = $request->id;
        $fee->amount = $request->amount;
        $fee->save();
      
        return redirect(route('sokostudent.fee', ['id' => $id]));
    }
}
