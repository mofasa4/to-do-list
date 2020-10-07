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

        return redirect('/todos');


    }

    public function edit($todoid){
        $todo = Todo::find($todoid);
        return view('todos.edit')->with('todo', $todo);
    }

    public function update($todoid){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = Todo::find($todoid);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        
        $todo->save();

        return redirect('/todos');


    }

    public function destroy($todoid){
        $todo = Todo::find($todoid);

        $todo->delete();

        return redirect('/todos');
    }
}
