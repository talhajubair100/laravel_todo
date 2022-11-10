<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['todos'] = Todo::all();
        return view('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = [
            'title' => $request->title,
            'description' => $request->description,
            
        ];

        if ($request->hasFile('image')) {
          
            $todoFileName = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $todo['image'] = Storage::putFileAs('images/todo',$request->file('image'),$todoFileName);

        }

        
        $to = Todo::create($todo);

        if(!empty($to)){
            return redirect()->route('todo.index');
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        $data['todo'] = $todo;
        return view('show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        $data['todo'] = $todo;
        return view('edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $todos = [
            'title' => $request->title,
            'description' => $request->description,
            
        ];
        if ($request->hasFile('image')) {
          
            $todoFileName = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $todos['image'] = Storage::putFileAs('images/todo',$request->file('image'),$todoFileName);

        }
        
        $todo->update($todos);
        

        if(!empty($todo)){
            return redirect()->route('todo.index');
        }
        else{
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
