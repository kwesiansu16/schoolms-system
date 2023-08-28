@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All hobbies {{$hobbies->count()}}</div>

                <div class="card-body">
                   <ul class="list-group">
                       @foreach ($hobbies as $hobby)
                       <li class="list-group-item">
                           {{$hobby->name}}
                           <div class="col-md-12 bg-light text-right">
                            <span>{{$hobby->created_at->diffForHumans()}}</span>
                           <a href="/hobby/{{ $hobby->id }}"><button type="button" class="btnbtn-dark">Details</button></a>
                           @auth
                           <a href="/hobby/{{ $hobby->id }}/edit"><button type="button" class="btnbtn-dark">Edit</button></a>
                           <form method="post" style="margin-left:5px;" class="float-right" action="/hobby/{{ $hobby->id }}">
                            @csrf
                            @method('Delete')
                            <input type="submit" class="btn btn-md-12 btn-danger" value="Delete">
                           

                           </form>
                           @endauth
                 
                        </div>
                       </li>
                      
                       @endforeach
                   </ul>
                </div>
            </div>

            <div class="mt-3">
                {{ $hobbies->links() }}
            </div>

            <div class="mt-2">
                <a class="btn btn-success btn-sm" href="/hobby/create"><i class="fa fa-plus-circle" aria-hidden="true"></i>Create new hobby</a>
                <a class="btnbtn-dark btn-sm" href="{{ URL::previous() }}"><i class="fas fa-arrow-circle-up"></i> Back to Overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
