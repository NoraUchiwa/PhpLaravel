<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('created_at', 'DESC')->with('picture')->paginate(5);

        return view('back.user.index',compact('users'));
    }

    public function show($id){
        $users =  User::find($id);

        return view('back.user.show', compact('users'));
    }

    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        //->with renvoie une notif de nom message avec le message deleted success
        return redirect()->route('back.user.index')->with('message' , [
            'type' => 'success',
            'content' => 'Success Deleted'
        ]);
    }

}
