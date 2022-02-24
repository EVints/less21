<?php

namespace App\Http\Controllers;

use App\Models\Logs;

use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index(Request $request)
    {

        $logs = new Logs();

        $logs->user = $request->get('user', '???');
        $logs->message = "Computer restart";
        $logs->status = 0;

        $logs->save();

        return response('index text');
    }


    public function recursion()
    {
        $this->fact(5);
        exit();
    }


    // private function test_1(int $n)
    // {

    //     if ($n <= 0) {
    //         return;
    //     }
    //     echo "$n<br>";

    //     $this->test_1(--$n);
    // }


    public function fact($n)
    {


        $this->fact($n - 1);
    }
}
