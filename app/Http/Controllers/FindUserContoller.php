<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FindUserContoller extends Controller
{
    public function FindUser($id){
             // dd($id);

              $user=User::where('id',$id)->with('post','profile')->first();
             // return $users;
              return View('pages.dashboard.user-page',compact('user',));
    }
}
