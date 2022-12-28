<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function dbConnect()
    {
//        $dbName = DB::Connection()->getDatabaseName(); //to see database name
//        $dbName = DB::Connection()->select("SELECT * FROM results");
//        $dbName = DB::Connection()->select("SELECT student_id FROM results WHERE subject='English' ORDER BY mark ASC limit 0,2");
        $dbName = DB::Connection()->select("SELECT * FROM results WHERE subject='English' ORDER BY mark DESC limit 2,3");
//        $dbName = DB::Connection()->select("select * from results where mark in (select mark from results group by mark order by mark desc limit 2,1)");
        return $dbName;
//        $dbName = DB::Connection()->select("SELECT * FROM details");
//        return $dbName;
    }
}
