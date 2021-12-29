<?php

namespace App\Http\Controllers;



use App\Models\todo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {

        $todos = Todo::latest()->paginate(2);

        return view('todos.index', compact('todos'));
    }

    public function show(todo $id)
    {
        // dd($id);
        // $todo = todo::findorfail($id);
        return view('todos.show', compact('id'));
    }
    public function create()
    {

        return view('todos.create');
    }
    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
       todo::create([
           'title'=> $request->title,
           'description' => $request->description,
       ]);
       alert()->success('Success Message', 'Optional Title');

       return redirect()->route('todos.index');

    }
    public function edit(todo $id){

        return view('todos.edit', compact('id') );
    }
    public function update(request $request, todo $id){

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
       $id->update([
           'title'=> $request->title,
           'description' => $request->description,
       ]);
       alert()->success('Success Message', 'Optional Title');

       return redirect()->route('todos.index');

    }
    public function delete(todo $id){

       $id->delete();
       return redirect()->route('todos.index');

    }
    public function complete(todo $id){
        $id->update([
            'completion' => 1
        ]);
        return redirect()->route('todos.index');

    }
}
