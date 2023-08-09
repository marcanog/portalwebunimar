<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Status;
use App\Permission;
use App\Users_Permissions;
use Hash;
use Auth;

class UsersController extends Controller
{
    public function index()
    {
        return view ('/admin/users')
        ->with('users', User::paginate(15))
        ->with('permissions', Permission::get())
        ->with('status', Status::get());
    }

    public function store(Request $request)
    {
        $user_data = $request->validate([
            'document_id'             => 'required|min:8|max:20|unique:users',
            'name'                    => 'required|min:10|max:255',
            'email'                   => 'required|email|max:255|unique:users',
            'birth'                   => 'required|date',
            'phone'                   => 'required|min:11|max:15',
            'password'                => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'   => 'required|min:8',
            'status_id'               => 'required|integer',
            "permissions"             => "array",
            "permissions.*"           => "integer",
        ]);
        
        $user_data['password'] = hash::make($request->password);
        $user_id = User::create($user_data)->id;
        if($request->permissions)
        {
            foreach($request->permissions as $permission) 
            {
                Users_Permissions::create([
                    'user_id' => $user_id,
                    'permission_id' => $permission
                ]);
            }
        }

        return back()->with('Listo', 'El usuario ha sido correctamente registrado');
    }

    public function update(Request $request)
    {
        $user = User::find($request->edit_id);
        $user_data = $request->validate([
            'document_id' => 'min:8|max:20|unique:users,document_id,'.$request->edit_id,
            'name'        => 'min:10|max:255',
            'email'       => 'email|max:255|unique:users,email,'.$request->edit_id,
            'birth'       => 'date',
            'phone'       => 'min:11|max:15',
            'status_id'   => 'integer',
        ]);

        $user->update($user_data);
        if($request->permissions)
        {
            $existingIds = collect($request->permissions)->filter()->toArray();
            Users_Permissions::where('user_id', $user->id)->whereNotIn('permission_id', $existingIds)->delete();
            foreach($request->permissions as $permission)
            {
                Users_Permissions::updateOrCreate([
                    'user_id' => $user->id,
                    'permission_id' => $permission
                ]);
            }
        }
        else
        {
            Users_Permissions::where('user_id', $user->id)->delete();
        }

        return back()->with('Listo', 'Se ha actualizado el registro correctamente');
    }

    public function show()
    {
        return view ('/admin/profile')->with('user', Auth::user());
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'phone' => 'required|min:11|max:15',
        ]);
        
        User::find(Auth::user()->id)->update([
            'phone' => $request->phone,
        ]);

        return back()->with('Listo', 'Se ha actualizado el registro correctamente');
    }
}
