<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //新タスク作成
    //@param Request @request
    //@return Response

    public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required|max:255',
    	]);

    	$task = new Task;
    	$task->name = $request->name;
    	$task->save();

    	return redirect('/tasks');
    }

    //タスクの表示
    //@param Request @request
    //@return Response

   public function index(Request $request){

   	  $tasks = Task::orderBy('created_at','asc')->get();

   	  return view('tasks',[
   	  	'tasks'=>$tasks
   	  ]);
   }

	// 指定タスクの削除
	//@param Request @request
    //@param Task $task
	//@return Response

   public function destroy(Request $request, Task $task){

   	 $task->delete();

   	 return view('/tasks');
   }
}
