<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\Promise\all;

class TodoController extends Controller
{
    public function index(){
        $todo_list = Todo::all();
        return view('index',compact('todo_list'));
    }
    public function store(Request $request){
        Todo::create($request->all());
        Session::flash('flash_message', 'Task successfully added!');
        return redirect('/');
    }
    public function destroy(Todo $todo){
        $todo->delete();
        return redirect('/');
    }
    public function edit($id){
        $todo = Todo::find($id);

        return view('edit',compact('todo'));
    }
    public function update(Request $request,$id){

        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->update();

        return redirect('/');
    }


}
