<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class HomeFeedController extends Controller
{
    public function HomeFeedPage(){
        if(Session::has('email')){

            // $ifPost=DB::table('posts')->exists();
            $ifPost=Post::exists();
           // dd($ifPost);
        //    $posts=DB::table('posts')->get();
        $posts=Post::get();
               //  dd($post);  
               $ifProfile=Profile::where('email',session('email'))->exists();
               $profile=Profile::where('email',session('email'))->first();

            return View('pages.dashboard.home-feed-page',compact(['ifPost','posts','ifProfile','profile']));
        }
    }
}
