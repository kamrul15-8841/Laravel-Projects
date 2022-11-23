<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.home');
    }
    public function newUser()
    {
        return view('admin.user.add');
    }
    public function manageUser()
    {
        return view('admin.user.manage');
    }
}
