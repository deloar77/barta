<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{

     public function PostEditPage($id){
      // echo Session::get('user_id');
       $posts=DB::table('posts')
          ->where('id',$id)
          ->where('user_id',Session::get('user_id'))
          ->first();

        return View('pages.dashboard.post-edit-page',compact(['posts']));
     }

    public function PostCreate(Request $request){
        $post=[];
        $post['content']=$request->content;
        $post['user_id']=Session::get('user_id');
     //  dd($post);
       
       
        if($request->hasFile('picture')){
              $image=$request->file('picture');
              $ext = $image->extension();
             // dd($ext);
              $file=time().".".$ext;
              $image->storeAs('public/post',$file);
              $post['image']=$file;
    
        } 
        DB::table('posts')->insert($post);
        return redirect()->back();
    }


    public function PostUpdate(PostFormrequest $request,$id,$user_id){
       $validated=$request->validated();
       if($validated){
         $post=[];
        $post['content']=$request->content;
       
     
       
       
        if($request->hasFile('picture')){
              $image=$request->file('picture');
              $ext = $image->extension();
             // dd($ext);
              $file=time().".".$ext;
              $image->storeAs('public/post',$file);
              $post['image']=$file;
    
        } 
        DB::table('posts')->where('id',$id)->where('user_id',$user_id)->update($post);
        return redirect('/dashboard');
       }
         
       
    }

    public function PostDelete($id,$user_id){
         DB::table('posts')
          ->where('id',$id)
          ->where('user_id',$user_id)
          ->delete();
          return redirect()->back();
    }
}
