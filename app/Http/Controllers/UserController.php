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
  
   public function edit(User $user)
    {
        // $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }

  
  public function create()
    {
        return view('users.create');
    }

    // public function store(Request $request)
    // {
    //     $user = new User;
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->save();
    //     return redirect('users/'.$user->id);
    // }
    
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('users/' . $user->id);
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }

  
}
