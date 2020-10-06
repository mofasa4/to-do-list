@extends('layouts.app')

@section('title')
Show Item
@endsection


@section('content')
    <h3 class="text-center my-5">{{$toddo->name}}</h3>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">Details</div>
            <div class="card-body">
                {{$toddo->description}}        
            </div>
        </div>
        </div>
    </div>


@endsection
    
