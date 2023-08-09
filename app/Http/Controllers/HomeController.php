<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Board;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }
    public function index()
    {
        $news = News::select('news.id', 'news.title', 'news.resume', 'news.image', 'tags.name as first_tag')
                    ->limit(3)
                    ->orderBy('news.id', 'DESC')
                    ->where('news.status_id',1)
                    ->join('tags', 'news.tags_id', '=', 'tags.id')->get();
        return view('/home')
                ->with('news', $news)
                ->with('events', Event::where('status_id', 1)->limit(2)->orderBy('id', 'DESC')->get());
    }
    public function downloadFile()
    {
        $myFile = storage_path("identity/athem/file.pdf");

        return response()->download($myFile);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
