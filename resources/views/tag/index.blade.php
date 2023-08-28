@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tag List</div>

                <div class="card-body">
                   <ul class="list-group">
                       @foreach ($tags as $tag)
                       <li class="list-group-item">
                           {{$tag->name}}
                           <div class="col-md-12 bg-light text-right">
                           <a href="/tag/{{ $tag->id }}"><button type="button" class="btnbtn-dark">Details</button></a>
                           <a href="/tag/{{ $tag->id }}/edit"><button type="button" class="btnbtn-dark">Edit</button></a>
                           <form method="post" style="margin-left:5px;" class="float-right" action="/tag/{{ $tag->id }}">
                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-md-12 btn-danger" value="Delete">

                           </form>
                 
                        </div>
                       </li>
                      
                       @endforeach
                   </ul>
                </div>
            </div>

            <div class="mt-2">
                <a class="btn btn-success btn-sm" href="/tag/create"><i class="fa fa-plus-circle" aria-hidden="true"></i>Create new tag</a>
            </div>
        </div>
    </div>
</div>
@endsection
