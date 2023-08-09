<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Public_document;
use App\Document_type;
use App\Status;

class PublicDocumentsController extends Controller
{
    //Return to regulations view page
    public function index(){
        $normatives = Public_document::where('status_id',1)->where('type_id',2)->orderBy('date', 'ASC')->get();
        $manuals = Public_document::where('status_id',1)->where('type_id',3)->orderBy('date', 'ASC')->get();
        return view ('/regulations')->with('normatives',$normatives)->with('manuals',$manuals);
    }

    //Return to gazzete view page
    public function gazzete(){
        $gazettes = Public_document::where('status_id',1)->where('type_id',4)->orderBy('date', 'ASC')->get();
        return view('/gazetteuniv')->with('gazettes',$gazettes);
    }

    //Return to admin documents view page
    public function adminDocuments(){
        $documents = Public_document::select('public_documents.id', 'public_documents.name', 'public_documents.file', 'public_documents.date', 'public_documents.trimester', 'public_documents.type_id', 'public_documents.status_id', 'documents_type.name as type_name', 'status.name as status_name')->join('documents_type', 'public_documents.type_id', '=', 'documents_type.id')->join('status', 'public_documents.status_id', '=', 'status.id')->get();
        return view ('admin.documents')->with('documents',$documents)->with('doc_types',Document_type::get())->with('status', Status::get());
    }

    //Store a new document and its file
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'trimester' => 'required|min:1|max:4',
            'date' => 'required|numeric|between:1998,'.date("Y"),
            'file' => 'required|file|mimes:pdf',
            'doc_type' => 'required',
        ]);
        //Get the type name of the document
        $doc_type = Document_type::where('id',$request->doc_type)->get()[0]->name;
        //Save file into the folder
        $file = $request->file('file');
        $destiny = public_path('storage/'.$doc_type.'/'.$request->date);
        $file_name = str_replace(".pdf", "__".date('dmyhis').".pdf",$file->getClientOriginalName());
        $request->file->move($destiny,str_replace(" ", "-", $file_name));
        //Insert document into the database
        Public_document::create([
            'file' => str_replace(" ", "-", $file_name),
            'name' => $request->name,
            'date' => $request->date,
            'trimester' => $request->trimester,
            'type_id' => $request->doc_type,
            'status_id' => '1',
        ]);
        return back()->with('Listo', 'Se ha guardado satisfactoriamente');
    }

    //Update a document
    public function update (Request $request){
        $request->validate([
            'name' => 'required|min:5|max:255',
            'trimester' => 'required|min:1|max:4',
            'date' => 'required|numeric|between:1998,'.date("Y"),
            'file' => 'file|mimes:pdf',
        ]);
        //Get database document data and the complete link of the file
        $document = Public_document::find($request->idedit);
        $link_document = Document_type::find($document->type_id)->name.'/'.$document->date.'/'.$document->file;
        //Move the document file to a new folder when the date or the type is changed
        if($request->date != $document->date || $request->doc_type != $document->type_id){
            $link_paste = Document_type::find($request->doc_type)->name.'/'.$request->date.'/'.$document->file;
            Storage::disk('documents')->copy($link_document, $link_paste);
            Storage::disk('documents')->delete($link_document);
        }
        //Update the document information
        $document->update([
            'name' => $request->name,
            'date' => $request->date,
            'trimester' => $request->trimester,
            'type_id' => $request->doc_type,
            'status_id' => $request->status_id,
        ]);
        //Upload a new file when the original one of the document is changed
        if($request->hasFile('file')){
            //get the document type name
            $doc_type = Document_type::where('id',$request->doc_type)->get()[0]->name;
            //Save file
            $file = $request->file('file');
            $destiny = public_path('storage/'.$doc_type.'/'.$request->date);
            $file_name = str_replace(".pdf", "__".date('dmyhis').".pdf",$file->getClientOriginalName());
            $request->file->move($destiny,str_replace(" ", "-", $file_name));
            $document->update(['file' => str_replace(" ", "-", $file_name)]);
            Storage::disk('documents')->delete($link_document);
        }
        return back()->with('Listo', 'Se ha actualizado el registro correctamente');
    }
}
