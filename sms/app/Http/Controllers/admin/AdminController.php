<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public $user, $users;
    public function index()
    {
        return view('admin.home.home');
    }

    public function addUser()
    {
        return view('admin.user.add');
    }

    public function create(Request $request)
    {
//        return $request->all();
        User::newUser($request);
        return redirect('/add/user')->with('message', 'User Created Successfully');
    }

    public function manageUser()
    {
        $this->users = User::all();
        return view('admin.user.manage' , ['users' => $this->users]);
    }

    public function editUser($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit', ['user' =>$this->user]);
    }
    public function updateUser(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/manage/user')->with('message', 'User info Update Successfully');
    }

    public function deleteUser($id)
    {
        User::deleteUser($id);
        return redirect('/manage/user')->with('message', 'User info Delete Successfully');
    }
}
