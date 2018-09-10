<?php

use App\Task;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');



/*Route::get('/tasks', function(){
    //$tasks = DB::table('tasks')->get();
    $tasks = Task::all();
    
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id){
    //$task = DB::table('tasks')->find($id);
    $task = Task::find($id);
    
    return view('tasks.show', compact('task'));
});*/