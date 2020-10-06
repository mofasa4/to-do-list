@extends('layouts.app')

@section('title')
 Create Todos
@endsection

@section('content')

<h3 class="text-center my-5">Create Todos</h3>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create New Todo</div>
            <div class="card-body">
                <form action="/store-todos" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <textarea name="description" cols="5" rows="5" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Create Todo</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection