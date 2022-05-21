<?php

namespace App\Http\Controllers\Usermain;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UsermainController extends Controller
{
     public function Logout(){
         Auth::logout();
         return redirect()->route('login');
     }

     public function UserProfile(){
         $id=Auth::user()->id;
         $data=User::find($id);
         return view('user.profile.view_profile',compact('data'));

     }

     public function UserEditProfile(){
        $id=Auth::user()->id;
        $editdata=User::find($id);
        return view('user.profile.edit_profile',compact('editdata'));
     }

     public function UserupdateProfile(Request $request){
         $data=User::find(Auth::user()->id);
         $data->name=$request->name;
         $data->email=$request->email;
         if($request->file('profile_photo_path')){
             $file=$request->file('profile_photo_path');
             unlink(public_path('upload/user_images/'.$data->profile_photo_path));
             $filename=date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/user_images'),$filename);
             $data['profile_photo_path']=$filename;

         }
         $data->save();
         $notification=array(
             'message'=>"successfully updated",
             'alert-type'=>"success"
         );

         return redirect()->route('user.profile')->with( $notification);
     }
}
