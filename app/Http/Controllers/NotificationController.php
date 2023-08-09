<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Department;
use App\User;
use Auth;

class NotificationController extends Controller
{
    public function index(){
        $notification = Notification::orderBy('id','DESC')->select('notifications.id',  'notifications.department_id', 'notifications.subject', 'notifications.content', 'notifications.created_at', 'notifications.users_email', 'notifications.status_id','departments.name as department')->join('departments', 'notifications.department_id', '=', 'departments.id')->get();
        return view('admin.notifications')->with('notifications',$notification)->with('departments',Department::get())->with('user', Auth::user());
    }
    
    public function addnotification(){
        return view('admin.addnotification')->with('departments',Department::get())->with('user', Auth::user());
    }

    public function store(Request $request){
        $request->validate([
            'destiny' => 'required|min:1',
            'subject' => 'required|min:10|max:255',
            'content' => 'required|min:10',
        ]);
        $notfound = [];
        $found = [];

        foreach (explode(',', $request->destiny) as $userdestiny) {
            if($user = User::where('email', '=', $userdestiny)->first()){
                $found[] = $user->email;
            }
            else{
                $notfound[] = $userdestiny;
            }
        }
        if(sizeof($found) != 0){
            Notification::create([
                'subject' => $request->subject,
                'content' => $request->content,
                'users_email' => implode(', ', $found),
                'status_id' => '1',
                'department_id' => $request->department,
            ]);
        }
        return back()->with('notfound',$notfound);
    }

    public function disable($idDel){
        $notification = Notification::find($idDel);
        $notification->update([
            'status_id' => '2',
        ]);
        return back();
    }
}
