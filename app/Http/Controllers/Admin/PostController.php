<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::paginate(3);
        return view("admin-panel.post.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin-panel/post/create", compact("categories"));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            "title"=> "required",
            "content"=> "required",
            "category"=>"required",
            "image"=> "required|image|mimes:png,jpg,jpeg",
        ]);

        $image = $request->image;
        $imageName = $image->getClientOriginalName();
        $image->storeAs("public/post-image", $imageName);


        $posts = Post::create([
            "category_id"=>$request->category,
            "title"=>$request->title,
            "image"=>$imageName,
            "content"=>$request->content,

        ]);

        return redirect("admin/posts")->with("successMsg","You've successfully added one!!");

          
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $comments = Comment::where("post_id",$id)->get();
        return view('admin-panel.post.comment',compact('comments'));
    }


    public function showHideComment($id){
        $comment = Comment::findOrFail($id);    

        $comment->status === 'show' ? $comment->update(['status'=> 'hide']) : $comment->update(['status'=> 'show']);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view("admin-panel/post/edit",compact("categories","post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = request()->validate([
            "title"=> "required",
            "content"=> "required",
            "category"=>"required",
            "image"=> "nullable|image|mimes:png,jpg,jpeg",
        ]);
        $post = Post::find($id);
        if($request->hasFile('image')){
            $postimage = $post->image;
            File::delete('storage/post-image/'.$postimage);
            $image = $request->image;
            $imageName = $image->getClientOriginalName();
            $image->storeAs("public/post-image", $imageName);

            $validated['image']=$imageName;

        }

            $post->update($validated);

        return redirect("admin/posts")->with("successMsg","You've updated successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::destroy($id);
        return redirect("admin/posts")->with("delmsg","You've deleted successfully one!!");
    }
}
