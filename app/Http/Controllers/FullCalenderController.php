<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Event;
  
class FullCalenderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */

   

    public function index(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
  
             return response()->json($data);
        }
  
        return view('dashboard1.fullcalender');
    }

    public function show()
    {
        //Hobby::orderBy('created_at','DESC')
      //  $hobbies = Hobby::orderBy('created_at','DESC')->paginate(8);
       $sokoevents = Event::orderBy('created_at', 'DESC')->paginate(10);
       
       return view('dashboard1.all-events',compact('sokoevents'))->with([
        'sokoevents' => $sokoevents,
        
    ]);
      // compact('sokostudents')
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Event::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Event::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Event::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }

  
}