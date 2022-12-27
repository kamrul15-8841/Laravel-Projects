<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
//    response redirect
    public function first()
    {
        return redirect('/api/second');
    }
    public function second()
    {
        return 'second';
    }
//    response json
//    public function name()
//    {
////        response in body
////        return response('my name is '.$name);
////        response in header
////        return response('my name is '.$name)->header('name', $name);
////        json response in header
////        $cars = array("Volvo", "BMW", "Toyota");
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
//        return response()->json($cars);
//    }
}
