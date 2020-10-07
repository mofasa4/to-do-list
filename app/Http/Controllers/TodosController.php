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

    public function show(Todo $todo){
        return view('todos.show')->with('toddo', $todo);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        
        $todo->save();

        session()->flash('success', 'Todo Created Successfuly');

        return redirect('/todos');


    }

    public function edit(Todo $todo){
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        
        $todo->save();

        session()->flash('success', 'Todo Updated Successfuly');

        return redirect('/todos');


    }

    public function destroy(Todo $todo){
        $todo->delete();

        session()->flash('success', 'Todo Deleted Successfuly');

        return redirect('/todos');
    }
}
