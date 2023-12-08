<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\Query\Builder;

class SearchController extends Controller
{
    public function Search(Request $request){
       // $search= $_GET['query'];
        $search=$request->query('query');
      // dd ($search);
        $users=User::where('fname','LIKE',"%".$search."%")
        ->orWhere('lname','LIKE',"%".$search."%")
       ->orWhereRaw("concat(fname,' ',lname) like '%".$search."%' ")
        ->orWhere('email','LIKE',"%".$search."%")
        ->get();
        return View('pages.dashboard.search-page',compact('users'));

       
        
    }
}
