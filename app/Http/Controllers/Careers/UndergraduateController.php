<?php

namespace App\Http\Controllers\Careers;

use App\Http\Controllers\Controller;
use App\Career;
use App\Career_document;

class UndergraduateController extends Controller
{
    public function viewCareer($degree, $view_name){
        $career_id = 0;
        switch ($view_name) {
            case 'systemengineering':
                $career_id = 1;
                break;
            case 'graphicdesing':
                $career_id = 2;
                break;
            case 'modernlangs':
                $career_id = 3;
                break;
            case 'administration':
                $career_id = 4;
                break;
            case 'publicaccounting':
                $career_id = 5;
                break;
            case 'law':
                $career_id = 6;
                break;
            case 'langsturism':
                $career_id = 7;
                break;
            case 'soccomunication':
                $career_id = 8;
                break;
            case 'integraleducation':
                $career_id = 9;
                break;
            case 'psychology_mention_social_intervention':
                $career_id = 10;
                break;
            case 'administration_mention_csf':
                $career_id = 10;
                break;
            default:
                abort(404);
        }
        $pensum = Career_document::where('status_id', 1)->where('career_id', $career_id)->where('type_id', 5)->get();
        $research_lines = Career_document::where('status_id', 1)->where('career_id', $career_id)->where('type_id', 6)->get();
        $folderName = str_replace(" ", "-", Career::where('id', $career_id)->get()[0]->name);
        return view("degrees/$degree/$view_name")->with('research_lines', $research_lines)->with('pensum', $pensum)->with('folderName', $folderName);
    }
}
