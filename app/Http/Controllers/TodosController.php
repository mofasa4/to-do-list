<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(){
        $todos = Todo::all();
        return view('todos.index')->with('ttodos', $todos);
    }

    public function show($todoId){
        $toddo = Todo::find($todoId);
        return view('todos.show')->with('toddo', $toddo);
    }
}
