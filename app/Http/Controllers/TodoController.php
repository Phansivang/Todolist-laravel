<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use function GuzzleHttp\Promise\all;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('index',['todo'=>$todo]);
    }
    public function store(){
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);
        Todo::create($attributes);
        return redirect('/');
    }
}
