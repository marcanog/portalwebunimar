<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notification;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Dompdf\Options;

class PDFController extends Controller
{
    public function view($id){
        $notification = Notification::select('notifications.subject', 'notifications.content', 'notifications.created_at','departments.name as department')->join('departments', 'notifications.department_id', '=', 'departments.id')->where("notifications.id","=",$id)->get();
        $content = str_replace('http://localhost',public_path(),$notification[0]->content);
        //return view("admin.viewtopdf")->with('notification',$notification)->with('content',$content);
        $pdf = PDF::loadView('admin.viewtopdf', ['notification' => $notification, 'content' => $content]);
        return $pdf->stream($notification[0]->subject.".pdf");
    }
    public function download_file(){
        //dd('entro aqui');
        $pdf = \PDF::loadView('components.introductory');
        return $pdf->stream('components.introductory.pdf');
    }
}
