<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    //Download a document with a route sent
    public function routeDownload ($folder,$link_document){
        return Storage::disk('documents')->download($folder.'/'.$link_document);
    }
}
