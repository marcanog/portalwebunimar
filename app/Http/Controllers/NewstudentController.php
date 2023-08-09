<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewstudentController extends Controller
{
    //
    public function show(){
        return view ('/newstudents')->with('equivalency','');
    }    
    public function showEquivalency(){
        return view ('/newstudents')->with('equivalency','show');
    }

}
