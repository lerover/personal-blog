<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;
class CommentController extends Controller
{
    public function comment(Request $request){
        $validated = $request->validate([
            "text"=> "required",
        ]);
        $id = $request->post_id;
        Comment::create([
            "user_id"=> Auth::user()->id,
            "post_id"=> $id,
            "text"=> $request->text,
        ]);
        return back();
    }
}
