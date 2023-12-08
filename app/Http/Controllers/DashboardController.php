<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function DashboardPage(){
        if(Session::has('email')){

            // $ifPost=DB::table('posts')
            // ->where('user_id',session('user_id'))
            // ->exists();
           // dd($ifPost);
           $ifPost=Post::where('user_id',session('user_id'))
           ->exists();

        //    $posts=DB::table('posts')
        //          ->where('user_id',session('user_id'))
        //          ->get();
               //  dd($post);  

               $posts=Post::where('user_id',session('user_id'))
               ->get();

               $ifProfile=Profile::where('email',session('email'))->exists();
               $profile=Profile::where('email',session('email'))->first();
              

            return View('pages.dashboard.dashboard-page',compact(['ifPost','posts','ifProfile','profile']));
        }

       
    }
}
