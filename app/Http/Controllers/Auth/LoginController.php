<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\User;
use Hash;
use Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //Get the person data needed for the web page
    public function getPortalUser($request){
        $user_data = Http::withHeaders(['Portalunimar-Api-Key' => Hash::make(env('PORTALUNIMAR_API_KEY'))])->get('http://170.81.146.173:9100/api/portal_unimar/portal_user/'.$request->email)->json();
        //Check the person is found
        if($user_data && $user_data['status']){
            $data = collect($user_data['data'])->only(['document_id', 'name', 'email'])->toArray();
            $data['teacher_api_id'] = $user_data['data']['isTeacher'] ? $user_data['data']['isTeacher']['id'] : null;
            $data['student_api_id'] = $user_data['data']['isStudent'] ? $user_data['data']['isStudent']['id'] : null;
            $data['employee_api_id'] = $user_data['data']['isEmployee'] ? $user_data['data']['isEmployee']['id'] : null;
            return $data;
        }
        return false;
    }

    //Login validations
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        //Authentication passed login and redirect
        if (Auth::attempt($credentials)) {
            //Check whether to update or not the user credentials
            if($data = $this->getPortalUser($request)) Auth::user()->update($data);
            return redirect()->intended('/home');
        }
        //Try to log failed
        else if(isset($request->email)){
            //Check that the sent email is not registered into the database
            if(!sizeof(User::where('email',$request->email)->get())){
                //Check that the email extension is unimar's institutional
                if(explode('@',$request->email)[1] != 'unimar.edu.ve'){
                    return Redirect::back()->withErrors(['email_error' => 'El usuario ingresado es incorrecto, debe ingresar con su correo institucional']);
                }
                //Register a new user when the correct email and Document ID is sent
                $register = $this->getPortalUser($request);
                if($register && preg_replace('/[^0-9]/','',$request->password) == preg_replace('/[^0-9]/','',$register['document_id'])){
                    $request->session()->flash('register_data', $register);
                    return view('auth.firstLogin');
                }
                else{
                    return Redirect::back()->withErrors(['email_error' => 'Estas credenciales no coinciden con nuestros registros']);
                }
            }
            return Redirect::back()->withErrors(['password_error' => 'La contraseña ingresada es incorrecta']);
        }
        //Try register data for the first time
        else if($request->session()->has('register_data')){
            //Validate that the user is sending the corret data format
            $validator = validator::make($request->all(),[
                'birth' => 'required|date',
                'phone' => 'required|min:11|max:15',
                'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'required|min:8',
            ]);
            //Reopen the session and send the error message when the validation fails
            if($validator->fails()) {
                $request->session()->reflash();
                return view('auth.firstLogin')->withErrors($validator);
            }
            //Register the user data into the database
            else{
                $register_data = array_merge($request->session()->get('register_data'), $request->all());
                $register_data['password'] = hash::make($request->password);
                User::create($register_data);
                //Close the register session and start the login with a message
                $request->session()->flush();
                return Redirect::back()->withErrors(['done' => 'Sus datos han sido actualizados con exito, intente ingresar nuevamente']);
            }
        }
        return view('auth.login');
    }

    //Logout accounts
    public function logout()
    {
        $this->guard()->logout();
        return redirect('/home');
    }

}
