<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  // public function getindex(Request $request){return view('user.index');}
  public function getindex(Request $request){
    $users = User::all();
    return view('user.index', compact('users'));
  }
}
