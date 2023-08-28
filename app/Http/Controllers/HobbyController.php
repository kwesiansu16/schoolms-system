<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobby;
use Carbon\Carbon;

class HobbyController extends Controller
{
    //

    
  /*  public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
*/

    public function index(){
       // $hobbies = Hobby::all();
       //$hobbies = Hobby::paginate(5);
       $hobbies = Hobby::orderBy('created_at','DESC')->paginate(8);
        return view('hobby.index')->with([
            'hobbies' => $hobbies,
            
        ]);
    }

    public function dashboard(){
        // $hobbies = Hobby::all();
        //$hobbies = Hobby::paginate(5);
        
         return view('dashboard.dashboard');
     }

     

    public function create(){
        return view('hobby.create');
    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required|min:3',
            'description' => 'required|min:10',
      

        ]);
       $hobby = new Hobby([

        'name'  => $request['name'],
        'description'  => $request['description'],


       ]);
       $hobby->save();
       return $this->index()->with(
           [
               'message_success' => "The hobby was created successfully.",
           ]
       );
    }

    public function show(Hobby $hobby){
        return view('hobby.show')->with([
            'hobby' => $hobby,
        ]);
    }

    public function edit(Hobby $hobby){
     
        return view('hobby.edit')->with([
            'hobby' => $hobby,
        ]);

}

public function update(Request $request, Hobby $hobby){

    $request->validate([

        'name' => 'required|min:3',
        'description' => 'required|min:10',

    ]);
   $hobby->update([

    'name'  => $request['name'],
    'description'  => $request['description'],


   ]);
   
   return $this->index()->with(
       [
           'message_success' => "The hobby was created updated.",
       ]
   );
}

public function destroy(Hobby $hobby){
    $oldName = $hobby->name;
    $hobby->delete();
    return $this->index()->with(
        [
            'message_delete' => "The hobby <b>" . $oldName . "</b> was deleted."
        ]
    );
}
}