<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    
    public function index() {
    	$name = "Haseeb";
		//$mylist = DB::table('tasks')->latest()->get();
		$mylist = Task::all();

		return view('tasks.index')->with(['name'=>$name, 'tasks'=>$mylist]);
    }

    public function show(Task $task_id) {
		
		return view('tasks.show')->with('task', $task_id);
    }
}
