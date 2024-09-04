<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("admin-panel.user.index",compact("users")); 
    }

    public function edit(){
        $user = User::find(request("id"));
        return view("admin-panel/user/edit",compact("user"));
    }

    public function update(Request $request){
        $user = User::find(request("id"));
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'status'=> $request->status
        ]
        );
        return redirect('admin/users')->with('successMsg','You have successfully updated.');
    }

    public function delete(Request $request){ 
        $user = User::find(request('id'));
        $user->delete();
        return redirect('/admin/users')->with('successMsg','You have successfully deleted.');
     }
}
