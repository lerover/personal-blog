<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentCount;

class StudentCountController extends Controller
{
    public function index(){
        $students = StudentCount::all();
        return view("admin-panel/student-count/index",compact("students"));
    }

    public function create(Request $request){
        $request->validate([
            "studentcount"=> "required"
        ]);

        StudentCount::create([
            "count"=> $request->studentcount,
        ]);
        return redirect("admin/studentcount");
        // return "Hello I'm create ";
    }
}
