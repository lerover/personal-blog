<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LikesDislike;
use Auth;

class LikeDislikeController extends Controller
{
    public function like(Request $request){
        $isExist = LikesDislike::where("user_id", Auth::user()->id)->where('post_id',$request->post_id)->first();
        if($isExist){
            if($isExist->type == 'like'){
                return back();
            }else{
                LikesDislike::where('post_id', $request->post_id)->update([
                    'type'=> 'like'
                ]);
                return back();
            }
        }else{
            $like = LikesDislike::create([
                "user_id"=> Auth::user()->id,
                "post_id"=> $request->post_id,
                "type"=>'like'
            ]);
    
            return back();
        }
    }

    public function dislike(Request $request){  
        $isExist = LikesDislike::where("user_id", Auth::user()->id)->where('post_id',$request->post_id)->first();
        if($isExist){
            if($isExist->type == 'dislike'){
                return back();
            }else{
                LikesDislike::where('post_id', $request->post_id)->update([
                    'type'=> 'dislike'
                ]);
                return back();
            }
        }else{
            $like = LikesDislike::create([
                "user_id"=> Auth::user()->id,
                "post_id"=> $request->post_id,
                "type"=>'dislike'
            ]);
    
            return back();
        }
    }
}
