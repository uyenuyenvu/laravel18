<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::all();

        // $tasks=Task::where()
        // ->orderBy('deadline','desc');
        // dd($tasks);
        return view('home')->with([
            'tasks'=>$tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.create');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->only('name', 'deadline','content','status');
//         dd($name);
        // dd('store');
        $task=new Task();
        $task->name=$name['name'];
        $task->deadline=$name['deadline'];
        $task->status=$request['status'];
        $task->content=$name['content'];
        $task->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $task=Task::find($id);

        // $task = Task::where('id', $id)->first();
        $task = Task::findOrFail($id);

        return view('layout.show')->with([
            'task'=>$task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd('sdfghjk');
        $task = Task::findOrFail($id);
        return view('layout.edit')->with([
            'task'=>$task
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request = $request->only('name', 'deadline','content');
//        dd($name['name']);
        $task=Task::findOrFail($id);

        //sua

        $task->name=$request['name'];
        $task->deadline=$request['deadline'];
        $task->status=$request['status'];
        $task->content=$request['content'];
        $task->save();
//        dd($task);
        return redirect('/');


//        dd($name);
//        return 'function update where id ='.$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $task = Task::find($id);
        $task->delete();
        return redirect('/');
    }
    public function complete($id){


        $task=Task::findOrFail($id);

        //sua

        $task->status='2';
        $task->save();
//        dd($task);
        return redirect('/');
    }
    public function recomplete($id){
        $task=Task::findOrFail($id);

        //sua

        $task->status='0';
        $task->save();
//        dd($task);
        return redirect('/');
    }
}
