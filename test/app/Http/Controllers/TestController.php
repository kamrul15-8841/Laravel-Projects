<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
////    response redirect
    public function first()
    {
        return redirect('/api/second');
    }

    public function users()
    {

//       $user = User::all();
//       $user = User::all();
//       $user = User::SELECT ("first_name" + " " + "last_name")->as ("whole_name" );
//        $user = User::select("id","first_name","last_name")
////            ->where("id", "like", "%0%")
//            ->where("first_name", "like", "%a%")
//            ->where("last_name", "like", "%a%")
//            ->get();
        $user = User::select("id", DB::raw("CONCAT(first_name, ' ', last_name) as full_name"))
            ->where("first_name", "like", "%abc%")
            ->where("last_name", "like", "%abc%")
            ->get();
        return response()->json($user);
    }

    public function second()
    {
        return 'second';
    }
//    response json
    public function name()
    {
       $user = User::all();
        foreach ($user as $u)
        {
            return array($u);
        }
//        response in body
//        return response('my name is '.$name);
//        response in header
//        return response('my name is '.$name)->header('name', $name);
//        json response in header
        $cars = array("Volvo" => [
            'one' =>[
                'name' => 'Kamrul',
                'age' => 28,
            ],
            'two' =>[
                'name' => 'Hasan',
                'age' => 21,
            ],
        ], "BMW", "Toyota");
//        $cars = [
//            'one' =>[
//                'name' => 'Kamrul',
//                'age' => 28,
//            ],
//            'two' =>[
//                'name' => 'Hasan',
//                'age' => 21,
//            ],
//        ];
        return response()->json($cars);
    }
}
