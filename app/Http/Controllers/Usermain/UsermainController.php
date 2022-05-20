<?php

namespace App\Http\Controllers\Usermain;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsermainController extends Controller
{
     public function Logout(){
         Auth::logout();
         return redirect()->route('login');
     }
}
