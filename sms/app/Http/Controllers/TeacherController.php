<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $code, $id, $year, $name,$updateString, $teacher, $teachers;
    public function addTeacher()
    {
        return view('admin.teacher.add');
    }
    public function create(Request $request)
    {
//        return $this->code;
        Teacher::newTeacher($request, $this->getTeacherCode($request));
        return redirect('/add/teacher')->with('message', 'Teacher info Save Successfully');
//        return substr($request->name, '0','3'); //first 3 letter of name
//        return substr('kamrul', '0','3'); //first 3 letter of name
//        return date('Y'); //print year
//        return $request->all();
    }

    public function editTeacher($id)
    {
       $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit', ['teacher' => $this->teacher]);
    }

    private function getTeacherCode($request)
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
        $this->updateString = preg_replace('/[^A-Za-z0-9]/',"", $request->name);
        $this->name = strtoupper(substr($this->updateString, 0, 3));
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;
        return $this->code;
    }

    public function manageTeacher()
    {
//        $this->teachers = Teacher::all();
        $this->teachers = Teacher::orderBy('id', 'desc')->get();
        return view('admin.teacher.manage', ['teachers' => $this->teachers]);
    }

    public function updateTeacher(Request $request, $id)
    {
        $this->teacher = Teacher::updateTeacher($request, $id, $this->getTeacherCode($request));
        return redirect('/manage/teacher')->with('message', 'Teacher info Update Successfully');
    }
    public function deleteTeacher($id)
    {
//        $this->teachers = Teacher::all();
        $this->teacher = Teacher::deleteTeacher($id);
        return redirect('/manage/teacher')->with('message', 'Teacher info Delete Successfully');
    }
}
