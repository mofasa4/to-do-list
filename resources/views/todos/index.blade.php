@extends('layouts.app')

@section('title')
To Do List
@endsection


@section('content')
        <h2 class="text-center my-5">Todos Page</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card card-header">
                    Todos
                    </div>
                    <div class="card card-body">
                        <ul class="list-group">
                            @foreach($ttodos as $todo)
                                <li class="list-group-item">
                                    {{ $todo->name }}
                                    @if(!$todo->completed)
                                    <a href="todos/{{$todo->id}}/complete" style="color:white;" class="btn btn-sm btn-warning float-right">Complete</a>
                                    @endif
                                    <a href="todos/{{$todo->id}}" class="btn btn-sm btn-primary mr-2 float-right">View</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection