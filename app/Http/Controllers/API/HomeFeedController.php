<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class HomeFeedController extends Controller
{
    public function HomeFeedPage(){
   
     
            $ifPost=Post::exists();
            $posts=Post::get();

            $ifProfile=Profile::exists();
            $profile=Profile::with('user')->get();

            return Response()->json([
                'ifPost'=>$ifPost,
                'posts'=>$posts,
                'ifProfile'=>$ifProfile,
                'profile'=>$profile
            ]);
        }
    
}
