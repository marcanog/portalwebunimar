<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\News;
use App\Status;
use App\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('/admin/news')->with('news', News::orderBy('id','DESC')->paginate(10))->with('tags', tag::get())->with('status', status::get());
    }

    public function addnews()
    {
        return view('/admin/addnews');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images/newsimg'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/newsimg' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'resume' => 'required|min:10',
            'img' => 'required|image|mimes:jpg,jpeg,png,svg|max:2080',
            'tags' => 'required',
        ]);
        //Insert unrepeated tags and get IDs of sent tags
        $tagsId = [];
        foreach (explode(',', $request->tags) as $tagName) {
            $tagsId[] = Tag::firstOrCreate([
                'name' => $tagName,
            ])->id;
        }
        //Save image
        $img = $request->file('img');
        $destino = public_path('image/newsimg');
        $nombre = "thumb_".time().".".$img->getClientOriginalExtension();
        $request->img->move($destino,$nombre);
        //Insert news
        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'image' => $nombre,
            'tags_id' => implode(',', $tagsId),
            'status_id' => '1',
        ]);
        return back()->with('Listo', 'Se ha guardado satisfactoriamente');
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'resume' => 'required|min:10',
            'tags' => 'required',
        ]);
        $new = News::find($request->idedit);
        //Update the cover image if it is changed
        if($request->hasFile('imgedit')){
            //Copy the new image to the folder
            $img = $request->file('imgedit');
            $destino = public_path('image/newsimg');
            $nombre = "thumb_".time().".".$img->getClientOriginalExtension();
            $request->imgedit->move($destino,$nombre);
            //Delete the old image only when it is not the default news image
            if($new->image != "default_new_thumb.jpg"){
                Storage::disk('news_img')->delete($new->image);
            }
            //Update image name into the database
            $new->update([
                'image' => $nombre,
            ]);
        }
        //Insert unrepeated tags and get IDs of sent tags
        $tagsId = [];
        foreach (explode(',', $request->tags) as $tagName) {
            $tagsId[] = Tag::firstOrCreate([
                'name' => $tagName,
            ])->id;
        }
        //Update news
        $new->update([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'tags_id' => implode(',', $tagsId),
            'status_id' => $request->status_id,
        ]);
        return back()->with('Listo', 'Se ha guardado satisfactoriamente');
    }

    /* public function show (Request $request){
         $news = Auth::news();
        /*print_r($user);
         die();*/
    /* return view ('/admin/news')->with('news', $news);*/
    /*  }*/

    /* CLient views */
    public function shownews(Request $request)
    {
        $new = News::all();
        /*print_r($new);
        die();*/
        return view('/home', compact('news'));
    }
}
