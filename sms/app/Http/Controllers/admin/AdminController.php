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
        User::newUser($request);
        return redirect('/add/user')->with('message', 'User Created Successfully');
    }

    public function manageUser()
    {
        return view('admin.user.manage');
    }
}
