<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Auth;


class userController extends Controller
{
    //
    function usersAll(){
        $data['users'] = User::where('status', '1')->latest()->get();

        return view('admin.users.all_users')->with($data);
    }
    function usersBlocked(){
        $data['users'] = User::where('status', '2')->latest()->get();

        return view('admin.users.blocked_users')->with($data);
    }

    function changeStatus($id, $status){

      $user= User::find(base64_decode($id));
      $user->status = $status;
      $user->save();

      return redirect()->back()->with('success', 'User Status Updated.');
    }


}
