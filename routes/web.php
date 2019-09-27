<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Task;
use Illuminate\Http\Request;

//タスク一覧表示
// Route::get('/',function(){

//   $tasks = Task::orderBy('created_at','asc')->get();
//   return view('tasks',[
//     'tasks' => $tasks
//   ]);
// });


// //タスク追加
// Route::post('/task',function(Request $request){
//   //Request $requestでPOSTの値を取得できる
//   // use Illuminate\Http\Request;を書かないとエラーになる

//   $validator = Validator::make($request->all(),[
//     'name'=>'required|max:255',
//   ]);

//   if($validator->fails()){
//     //リダイレクト先までInputとErrorのデータをフラッシュデータとしてセッションに保存して持ち越す
//     //errorsはcommon.errorsで表示
//     return redirect('/')
//     ->withInput()
//     ->withErrors($validator);
//   }

//   $task = new Task;
//   $task->name = $request->name;
//   $task->save();

//   return redirect('/');

// });

//タスク削除
// Route::delete('task/{task}',function(Task $task){
//   //{task}という記述で消すtaskを特定し、Task $taskにパラメーターを送る
//   //use App\Task;がないとエラーになる
// });

Route::get('/tasks','TasKController@index');

Route::post('/task','TaskController@store');

Route::delete('/task/{taks}','TaskController@destroy');