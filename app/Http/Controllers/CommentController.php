<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function CommentPage($post_id,$user_id){
        
       // dd($post_id,$user_id);
    //    $isComment=DB::table('comments')->exists();
       //dd($ifComment);
       $isComment=Comment::exists();
    //    $comments=DB::table('comments')->get();
      // dd($comments);
      $comments=Comment::get();
    
        return View('pages.dashboard.comment-page',compact(['user_id','post_id','isComment','comments']));
    }
    public function CreateComment(Request $request, $user_id,$post_id){
      
        $comment= new Comment();
        $comment->user_id=$user_id;
        $comment->post_id=$post_id;
        $comment->content=$request->comment;
        $comment->save();
      
        return redirect()->back();
        
      

    }
}
