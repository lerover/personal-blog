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
        $validated = $request->validate([
            "count"=> "required"
        ]);
        StudentCount::create($request->all());
        return redirect("admin/studentcount");
    }
}
