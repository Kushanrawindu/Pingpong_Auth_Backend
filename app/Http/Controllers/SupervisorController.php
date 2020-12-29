<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supervisor;

class SupervisorController extends Controller
{
    public function index(){
        return Supervisor::all();
    }

    public function show(Supervisor $supervisor){
        return $supervisor;
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'description' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'image' => 'required',
        ]);

        $supervisor = Supervisor::create($request->all());
        return response()->json($supervisor, 201);
    }

    public function update(Request $request, Supervisor $supervisor){
        $supervisor->update($request->all());
 
        return response()->json($supervisor, 200);
    }

    public function delete(Supervisor $supervisor){
        $supervisor->delete();
 
        return response()->json(null, 204);
    }
}
