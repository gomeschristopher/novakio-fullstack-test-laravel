<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class DateTimeController extends Controller
{
    public function getNowDateTime()
    {
        return response()->json(Carbon::now(), 200);
    }
}