<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
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
    $user=User::find($id);
    return view('user/edit', compact('user'));
  }

  
  public function create()
  {
    return view('user.create');
  }
  
  public function store(Request $request)
  {
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->save();
    return redirect('users');
  }
    
  public function update(Request $request, $id)
  {
    $user=User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();
    return redirect('/users');
  }
    
  public function destroy(Request $request, $id)
  {
    $user=User::find($id);
    $user->delete();
    return redirect('/users');
  }
  
}
