<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $code, $id, $year, $name, $teacher, $teachers;
    public function addTeacher()
    {
        return view('admin.teacher.add');
    }
    public function create(Request $request)
    {
        $this->teacher = Teacher::orderBy('id', 'desc')->first();
        if ($this->teacher)
        {
            $this->id = $this->teacher->id + 1;
        }
        else
        {
            $this->id = 1;
        }
        $this->name = strtoupper(substr($request->name, 0, 3));
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;
//        return substr($request->name, '0','3'); //first 3 letter of name
//        return substr('kamrul', '0','3'); //first 3 letter of name
//        return date('Y'); //print year
//        return $request->all();
    }
    public function manageTeacher()
    {
        return view('admin.teacher.manage');
    }
}
