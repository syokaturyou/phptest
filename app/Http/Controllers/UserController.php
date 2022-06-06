<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  // public function getindex(Request $request){return view('user.index');}
  public function index()
  {
    $users = User::all();
    return view('user.index', compact('users'));
  }
  
  public function show($id)
  {
    $user = User::find($id);
    return view('user.show', compact('user'));
  }
  
  public function edit($id)
  {
    // $user = User::find($id);
    // return view('user.edit', ['user' => $user]);
    $user=User::find($id);
    return view('user/show', compact('user'));
  }

  
  public function create()
  {
    return view('user.create');
  }
  
  public function store(Request $request)
  {
    $user = new User;
    // $user->name = $request->name;
    // $user->email = $request->email;
    $user->name = 'Some name';
    $user->email = 'Some email';
    $user->save();
    return redirect('user/'.$user->id);
  }
    
  public function update(Request $request, $id)
  {
    $user=User::find($id);
    // $user->name = $request->name;
    // $user->email = $request->email;
    $user->name = 'Some name';
    $user->email = 'Some email';
    $user->save();
    return redirect('/user/index');
  }
    
  public function destroy(Request $request, $id)
  {
    $user=User::find($id);
    $user->delete();
    return redirect('/users');
  }
  
}
