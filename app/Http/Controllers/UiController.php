<?php

namespace App\Http\Controllers;
use Auth;

use App\Models;
//skill model
use App\Models\Skill;
use App\Models\Project;
use App\Models\Category;
use App\Models\LikesDislike;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;

class UiController extends Controller
{

    public function blogs()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view("ui-panel.posts", compact("categories", "posts"));
    }

    public function details($id)
    {
        $post = Post::find($id);
        $likes = LikesDislike::where('post_id', $id)->where('type', 'like')->get();
        $dislikes = LikesDislike::where('post_id', $id)->where('type', 'dislike')->get();

        $comments = Comment::where('post_id', $id)->where('status','show')->get();

        
        if(Auth::check()){

        $likestatus = LikesDislike::where('post_id', $id)->where('user_id', Auth::user()->id)->first();
        return view("ui-panel.post-details", compact("post", 'likes', 'dislikes', 'likestatus', 'comments'));

        };

        return redirect('/login');
    }
}
