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
        $posts = Post::latest()->paginate(3);
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

    public function search(Request $request){
        $search = $request->search_data;
        $categories = Category::all();
        $posts = Post::where('title','like','%'. $search.'%')
        ->orWhere('content','like','%'. $search.'%')    
        ->orWhereHas('category',function($category) use($search){
            $category->where('name','like','%'.$search.'%');
        })
        ->paginate(3);
        return view("ui-panel.posts", compact("categories", "posts"));
  
    }

    public function search_by_category($catId){
        $categories = Category::all();
        $posts = Post::where('category_id',$catId)->paginate(3);
        return view("ui-panel.posts", compact("categories", "posts"));

    }
}
