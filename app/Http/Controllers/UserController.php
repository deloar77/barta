<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEntollmentrequets;
use App\Http\Requests\UserSignInrequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\View;
use Illuminate\View\View; 

class UserController extends Controller
{
    public function RegistrationPage(){
        if(session()->has('email')){
            return redirect('/dashboard');
        }
        return View('pages.auth.registration-page');
    }

    public function LoginPage(){
        if(session()->has('email')){
            return redirect('/dashboard');
        }
        return View('pages.auth.login-page');
    }
    function ProfilePage(){
        return View('pages.dashboard.profile-page');
    }


public function ProfileEditPage(){
    if(session()->has('email')){
    //  dd(session('email'));

      // $ifProfile= DB::table('profiles')
      //         ->where('email',session('email'))
      //         ->exists();
              $ifProfile=Profile::where('email',session('email'))->exists();

             // dd($ifProfile);
             if(!$ifProfile){
                // $profile=DB::table('profiles')
                // ->where('email',session('email'))
                // ->first();
                $profile=Profile::where('email',session('email'))->first();
              return View('pages.dashboard.profile-edit-page',compact(['ifProfile','profile']));
             } else {
                  // $profile=DB::table('profiles')
                  // ->where('email',session('email'))
                  // ->first();
                 // dd($profiles);

                 $profile=Profile::where('email',session('email'))->first();
                return View('pages.dashboard.profile-edit-page',compact(['ifProfile','profile']));
             }
            
      
     
     
    }
    
  
}

public function profileCreate(Request $request){
   // dd($request);
    $profile=[];
    $profile['address']=$request->address;
    $profile['bio']=$request->bio;
    $profile['email']=$request->email;
   
    if($request->hasFile('image')){
          $image=$request->file('image');
          $ext = $image->extension();
         // dd($ext);
          $file=time().".".$ext;
          $image->storeAs('/public/profile/',$file);
          $profile['image']=$file;

    } 
   // DB::table('profiles')->insert($profile);
     Profile::insert($profile);
    return redirect()->back();
}
public function profileUpdate(Request $request,$id){

  //  $profiles=DB::table('profiles')->where('id',$id)->first();
  $profiles=Profile::where('id',$id)->first();
   //dd($profiles);
    $profile=[];
    $profile['address']=$request->address;
    $profile['bio']=$request->bio;
    $profile['email']=$request->email;
   // dd($profiles);
 // dd($profiles->image);
 //dd($request->image);
 //dd($request->hasFile('image'));
    if($request->hasFile('image')){
          $destination=storage_path("public/profile/".$profiles->image);
         // dd($destination);
          
          if(File::exists($destination)){
           //  dd($destination);
            File::delete($destination);
          }
          $image=$request->file('image');
          $ext = $image->getClientOriginalExtension();
         // dd($ext);
          $file=time().".".$ext;
          $image->storeAs('/public/profile/',$file);
          $profile['image']=$file;

    } 
   
   // DB::table('profiles')->where('id',$id)->update($profile);
   Profile::where('id',$id)->update($profile);
    return redirect()->back();
}


public function UserRegistration(UserEntollmentrequets $request){
    //    dd($request->all());
    // $validated=  $request->validate([
    //     'first_name'=>'required|max:50',
    //     'last_name'=>'required|max:50',
    //     'username'=>'required',
    //     'email'=>['required','email'],
    //     'password'=>['required']
    //   ]);

    //   if($validated){
    //     $fname= $request->first_name;
    //     $lname= $request->last_name;
    //     $uname=$request->username;
    //     $email=$request->email;
    //     $password=$request->password;
    //    // dd($request->all());
    //    $user=  DB::table('users')->insert([
    //           'fname'=>$fname,
    //           'lname'=>$lname,
    //           'uname'=>$uname,
    //           'email'=>$email,
    //           'password'=>bcrypt($password)
    //           //'password'=>Hash::make($password)
    //       ]); 
    //       return redirect('/LoginPage');


 // }

  $validated= $request->validated();
  if($validated){
          $fname= $request->first_name;
        $lname= $request->last_name;
        $uname=$request->username;
        $email=$request->email;
        $password=$request->password;
       // dd($request->all());
      //  $user=  DB::table('users')->insert([
      //         'fname'=>$fname,
      //         'lname'=>$lname,
      //         'uname'=>$uname,
      //         'email'=>$email,
      //         'password'=>Hash::make($password)
      //     ]); 
      $user = User::insert([
        'fname'=>$fname,
        'lname'=>$lname,
        'uname'=>$uname,
        'email'=>$email,
        'password'=>Hash::make($password)
    ]); 
          return redirect('/LoginPage');

  }

//   $validator= Validator::make($request->all(),[
//         'first_name'=>'required|max:50',
//         'last_name'=>'required|max:50',
//         'username'=>'required',
//         'email'=>['required','email'],
//         'password'=>['required']
// ])->validate();
// $validated= $validator->validated();
// if($validated){
//     DB::table('users')->insert($validated);
// } else if($validator->fails()){
//     return redirect()->route('user-registration')->withErrors($validator)->withInput();
// }
//     //  if($validator->fails()){
    //     return redirect()->route('user-registration')->withErrors($validator)->withInput();
    //  }
  

     //$validated= $validator->safe()->only(['email'])//not essential
        //$validated= $validator->safe()->except(['email'])//not essential
    
}

 public function UserLogin(UserSignInrequest $request){

      $validated=$request->validated();
     // dd($validated);
      if($validated){
        $email=$request->email;
        $password=$request->password;
          // dd($email,$password);
        //  $user = DB::table('users')->where('email',$email)->first();
         $user=  User::where('email',$email)->first();
          // dd($user);
         // dd($user->email);
          if(!$user || !Hash::check($password,$user->password)){
            return redirect()->route('user-registration');
          } else {
            session()->put('email',$user->email);
            Session::put('user_id',$user->id);
            
            return redirect('/dashboard');
          }
        
        
       
      }
 }

 public function UserLogout(Request $request){
    if(session()->has('email')){
        session()->pull('email');
       // $request->session()->forget('email');
        $request->session()->forget('user_id');
        $request->session()->flush();

    }
    return redirect('/LoginPage');
 }


}
