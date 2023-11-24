<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function DashboardPage(){
        if(Session::has('email')){

            $ifPost=DB::table('posts')
            ->where('user_id',session('user_id'))
            ->exists();
           // dd($ifPost);
           $posts=DB::table('posts')
                 ->where('user_id',session('user_id'))
                 ->get();
               //  dd($post);  

            return View('pages.dashboard.dashboard-page',compact(['ifPost','posts']));
        }

       
    }
}
