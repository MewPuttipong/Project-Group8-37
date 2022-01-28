<?php

namespace App\Http\Controllers\Admin\Users;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function add(){
        return view('admin.users.adduser');
    }
    public function create(Request $request){
        $users = new User();
        $users-> username = $request->username;
        $users-> name = $request->name;
        $users-> email = $request->email;
        $users-> password = $request->password;
        $users-> address = $request->address;
        $users-> phone = $request->phone;
        $users->save();

        return redirect()->route('user.index');
    }
}
