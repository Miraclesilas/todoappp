<?php

namespace App\Http\Controllers;

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
         $task= Task::all();
         return view("dashboard",compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request)
    {
        $task = new Task();
    $task ->name = $request->name;
    $task ->activity= $request->activity;
    $task ->when = $request->when;
    $task ->save();
    session()->flash('success','✔ Task created successfully!!');
    return redirect()->back();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #$task= Blog::all();
        //   // return view("database");
        //    return view("database",compact('blog'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $task = Task::findOrFail($id);
    return view('edit', compact('task'));
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
        $task= Task::where('id',$id)->first(); 
        $task->name=$request->name;
        $task->activity=$request->activity;
        $task->when=$request->when;
        $task->save();
        session()->flash('success', 'New Task successfully updated ✔');
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::where('id',$id)->first();
        $task->delete();
        session()->flash('delete', ' ⚠ Status Successfully Deleted');
        return redirect()->back();
    }


    public function database(){
        $task = Task::all();
      #   return view("database");
       return view("database",compact('task'));
       }











}
