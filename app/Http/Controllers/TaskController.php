<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
    	$input = $request->all();
    	$task = new Task;
    	$task->name = $input['name'];
    	$task->save();
    }

    public function index()
    {
    	$tasks = Task::all();

    	return $tasks;
    }
}
