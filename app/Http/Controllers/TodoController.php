<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use function GuzzleHttp\Promise\all;

class TodoController extends Controller
{
    public function index(){
        $student = [
            'name' => 'Phansivang'
        ];
        $todo_list = Todo::all();
        return view('index',compact('todo_list'));
    }
    public function store(){
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);
        Todo::create($attributes);
        return redirect('/');
    }
    public function destroy(Todo $todo){
        $todo->delete();
        return redirect('/');
    }
    public function edit(Todo $edit){
        return view('edit', compact('edit'));
    }

}
