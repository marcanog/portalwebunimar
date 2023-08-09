<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

class SchedulesController extends Controller
{
    public function index()
    {
        return view('/admin/student/schedules');
    }
}
