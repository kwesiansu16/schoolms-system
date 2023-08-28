<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller

  {
    public function index(){
        $tags = Tag::all();
        return view('tag.index')->with([
            'tags' => $tags,
        ]);
        
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tag.create');
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

        $request->validate([

            'name' => 'required|min:3',
            'style' => 'required|min:2',

        ]);
       $hobby = new Tag([

        'name'  => $request['name'],
        'style'  => $request['style'],


       ]);
       $hobby->save();
       return $this->index()->with(
           [
               'message_success' => "The tag was created successfully.",
           ]
       );


        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
        return view('tag.edit')->with([
            'tag' => $tag,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag){

        $request->validate([
    
            'name' => 'required|min:3',
            'style' => 'required|min:10',
    
        ]);
       $tag->update([
    
        'name'  => $request['name'],
        'style'  => $request['style'],
    
    
       ]);
       
       return $this->index()->with(
           [
               'message_success' => "The tag was updated.",
           ]
       );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
        $oldName = $tag->name;
        $tag->delete();
        return $this->index()->with(
            [
                'message_success' => "The tag <b>" . $oldName . "</b> was deleted."
            ]
        );

    }
}
