<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Status;
use App\User;
use App\Notification;
use App\Department;
use Auth;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function notification(){
        $notification = Notification::orderBy('id','DESC')->select('notifications.id', 'notifications.department_id', 'notifications.subject', 'notifications.content', 'notifications.created_at', 'notifications.status_id','departments.name as department')->join('departments', 'notifications.department_id', '=', 'departments.id')->where('notifications.users_email','like','%'.Auth::user()->email.'%')->where('notifications.department_id','=','1')->where('notifications.status_id','=','1')->get();
        return view('admin.employee.notifications')->with('notifications',$notification)->with('user', Auth::user());
    }
}
