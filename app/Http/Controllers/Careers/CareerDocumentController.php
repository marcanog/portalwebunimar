<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Career_document;
use App\Document_type;
use App\Career;
use App\Status;

class CareerDocumentController extends Controller
{
    //Return admin career documents view
    public function index(){
        $documents = Career_document::select('career_documents.id', 'career_documents.name', 'career_documents.file', 'career_documents.date', 'career_documents.career_id', 'career_documents.type_id', 'career_documents.status_id', 'career.name as career_name', 'documents_type.name as type_name', 'status.name as status_name')->join('career', 'career_documents.career_id', '=', 'career.id')->join('documents_type', 'career_documents.type_id', '=', 'documents_type.id')->join('status', 'career_documents.status_id', '=', 'status.id')->get();
        return view ('admin.career_documents')->with('documents',$documents)->with('careers',Career::orderBy('name')->get())->with('doc_types',Document_type::get())->with('status', Status::get());
    }
    
    //Return a sent career offer view
    public function showView($viewName, $career_id){
        $pensum = Career_document::where('status_id',1)->where('career_id',$career_id)->orderBy('date', 'ASC')->get();
        return view ('/'.$viewName)->with('pensum',$pensum);
    }

    //Store a new career and its file
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'career' => 'required',
            'date' => 'required|numeric|between:1998,'.date("Y"),
            'file' => 'required|file|mimes:pdf',
            'doc_type' => 'required',
        ]);
        //Get the type name of the document and teh career folder name
        $doc_type = Document_type::where('id',$request->doc_type)->get()[0]->name;
        $career = str_replace(" ", "-",Career::where('id',$request->career)->get()[0]->name);
        //Save file into the folder
        $file = $request->file('file');
        $destiny = public_path('storage/'.$doc_type.'/'.$career.'/'.$request->date);
        $file_name = str_replace(".pdf", "__".date('dmyhis').".pdf",$file->getClientOriginalName());
        $request->file->move($destiny,str_replace(" ", "-", $file_name));
        //Insert document into the database
        Career_document::create([
            'file' => str_replace(" ", "-", $file_name),
            'name' => $request->name,
            'date' => $request->date,
            'career_id' => $request->career,
            'type_id' => $request->doc_type,
            'status_id' => '1',
        ]);
        return back()->with('Listo', 'Se ha guardado satisfactoriamente');
    }

    
    public function update (Request $request){
        $request->validate([
            'name' => 'required|min:5|max:255',
            'career' => 'required',
            'date' => 'required|numeric|between:1998,'.date("Y"),
            'file' => 'file|mimes:pdf',
        ]);
        //Get database career document data and the complete link of the file
        $document = Career_document::find($request->idedit);
        $career = str_replace(" ", "-",Career::where('id',$document->career_id)->get()[0]->name);
        $link_document = Document_type::find($document->type_id)->name.'/'.$career.'/'.$document->date.'/'.$document->file;
        //Move the document file to a new folder when the date or the type is changed
        if($request->date != $document->date || $request->doctypeedit != $document->type_id || $request->career != $document->career_id){
            $career_paste = str_replace(" ", "-",Career::where('id',$request->career)->get()[0]->name);
            $link_paste = Document_type::find($request->doctypeedit)->name.'/'.$career_paste.'/'.$request->date.'/'.$document->file;
            Storage::disk('documents')->copy($link_document, $link_paste);
            Storage::disk('documents')->delete($link_document);
        }
        //Update the document information
        $document->update([
            'name' => $request->name,
            'date' => $request->date,
            'career_id' => $request->career,
            'type_id' => $request->doctypeedit,
            'status_id' => $request->status_id,
        ]);
        //Upload a new file when the original one of the career document is changed
        if($request->hasFile('file')){
            //get the document type name and career folder
            $doc_type = Document_type::where('id',$request->doctypeedit)->get()[0]->name;
            //Save file
            $file = $request->file('file');
            $destiny = public_path('storage/'.$doc_type.'/'.$career.'/'.$request->date);
            $file_name = str_replace(".pdf", "__".date('dmyhis').".pdf",$file->getClientOriginalName());
            $request->file->move($destiny,str_replace(" ", "-", $file_name));
            $document->update(['file' => str_replace(" ", "-", $file_name)]);
            Storage::disk('documents')->delete($link_document);
        }
        return back()->with('Listo', 'Se ha actualizado el registro correctamente');
    }
}
