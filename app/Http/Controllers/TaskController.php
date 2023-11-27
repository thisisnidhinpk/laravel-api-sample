<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class TaskController extends Controller
// {
//     //
// }
// app/Http/Controllers/TaskController.php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // $task=Task::all();
        // if($task->count()>0)
        // {
        //     return response()->json([
        //         'status'=>200,
        //         'dta'=>$task
        //     ],200);
        // }
        // else{
        //     return response()->json([
        //         'status'=>404,
        //         'dta'=>'No data'
        //     ],404);
        // }
         return Task::all();
    }

    public function show($id)
    {
        return Task::find($id);
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
    //    $task = Task::create([
    //     'title'=>$request->title,
 
    //     'description'=>$request->description
    //    ]);
    //    if($task)
    //    {
    //        return response()->json([
    //            'status'=>200,
    //            'dta'=>'Data added success'
    //        ],200);
    //    }
    //    else{
    //        return response()->json([
    //            'status'=>500,
    //            'dta'=>'Insersion failed'
    //        ],500);
    //    }
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return response()->json(['message' => 'Task deleted successfully'], 200);
    }
}
