<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Http;
use Auth;
use Hash;

class GradesController extends Controller
{
    public function index()
    {
        //Get the student and grades data
        $student_data = Http::withHeaders(['Portalunimar-Api-Key' => Hash::make(env('PORTALUNIMAR_API_KEY'))])->get('http://170.81.146.173:9100/api/portal_unimar/student_grades/'.Auth::user()->email)->json();

        if(!$student_data) $student_data = [
            'message' => 'Null data',
            'status' => false,
        ];
        
        return view ('admin.student.grades')->with('student_data', $student_data);
    }
}
