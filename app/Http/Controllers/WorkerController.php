<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function worker(){
        $allWorkers=Worker::all();
        return view('index',['workers'=>$allWorkers]);
    }
    public function show($workerId){
        $worker=Worker::find($workerId);
    }
}
