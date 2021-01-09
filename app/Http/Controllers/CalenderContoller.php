<?php

namespace App\Http\Controllers;

use App\Models\YearMonths;
use Illuminate\Http\Request;
use App\Models\Calender;

class CalenderContoller extends Controller
{
    function show()
    {
//        $data = Calender::all();
//        return view('Calender', ['calenders' => $data]);

        $data = YearMonths::with('calender')->get();
        return view('Calender', ['calenders' => $data]);
    }
}
