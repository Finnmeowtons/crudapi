<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function adding (Request $request){

        $items = new Teacher();
        $items->Name = $request->Name;
        $items->Age = $request->Age; 
        $items->Address = $request->Address;
        $items->Department = $request->Department;
        $items->save();
        return response()->json ('Added Successfully');
    }

    public function edit (Request $request){
        $items = Teacher::findorfail($request->id);
        $items->Name = $request->Name;
        $items->Age = $request->Age; 
        $items->Address = $request->Address;
        $items->Department = $request->Department;
        $items->update();
        return response()->json('Updated Successfully');
    }


    public function delete(Request $request){
        $items = Teacher::findorfail($request->id)->delete();
        return response()->json('Deleted Successfully');
    }

    public function getData(){
        $items = Teacher::all();
        return response()->json($items);
    }
}
