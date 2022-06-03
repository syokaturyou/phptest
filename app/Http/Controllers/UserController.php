<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  // public function getindex(Request $request){return view('user.index');}
  public function getindex(){
    $users = User::all();
    return view('user.index', compact('users'));
  }
  
  public function getshow($id){
    $user = User::find($id);
    return view('user.show', compact('user'));
  }
}
