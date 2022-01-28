<?php

namespace App\Http\Controllers\Admin\Users;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::first()->paginate(5);
        return view('admin.users.index',compact('users'));
    }
    public function destroy($id_user){
        User::destroy($id_user);
        return redirect()->route('user.index');
    }
    public function edit($id){
        $edituser = User::find($id);
        return view('admin.users.edituser',compact('edituser'));
    }
    public function update(Request $request, $id){
        $prong = User::find($id);
        $prong-> username = $request->username;
        $prong-> name = $request->name;
        $prong-> email = $request->email;
        $prong-> password = $request->password;
        $prong-> address = $request->address;
        $prong-> phone = $request->phone;
        $prong->save();

        return redirect('admin/users/index');

    }
}
