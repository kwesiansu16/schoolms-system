@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Details</div>

                <div class="card-body">
                  <b>{{$hobby->name}}</b>
                  
                 <p>{{$hobby->description}}</p>
                  
                </div>
            </div>

            <div class="mt-2">
                <a class="btnbtn-dark btn-sm" href="/hobby"><i class="fa fa-angle-left" aria-hidden="true"></i>
                    Back to overview</a>
            </div>
        </div>
    </div>
</div>
@endsection
