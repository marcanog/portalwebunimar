<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Laravel\Sanctum\PersonalAccessToken;
use App\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class InscriptionsController extends Controller
{
    public function index(){
        $student_data = Http::withHeaders(['Portalunimar-Api-Key' => Hash::make(env('PORTALUNIMAR_API_KEY'))])->get('http://localhost/api/portal_unimar/student_inscription_dates/'.Auth::user()->email)->json();

        if(!$student_data) $student_data = [
            'message' => 'Null data',
            'status' => false,
        ];
        
        return view('admin.student.inscriptions')->with('student_data', $student_data);
    }
    
    public function redirectInscription() {
        $student_data = Http::withHeaders(['Portalunimar-Api-Key' => Hash::make(env('PORTALUNIMAR_API_KEY'))])->get('http://localhost/api/portal_unimar/student_inscription_dates/'.Auth::user()->email)->json();

        if($student_data['status']) {
            foreach($student_data['data'] as $data) {
                if($data['available']) {
                    $inscriptionToken = Auth::user()->createToken(hash::make('inscription-token'))->accessToken;
                    return redirect('http://localhost/api/portal_unimar/inscription/' . $inscriptionToken->token)->header('Portalunimar-Api-Key' , Hash::make(env('PORTALUNIMAR_API_KEY')));
                }
            }
        }

        return redirect('https://www.unimar.edu.ve/');
    }

    public function validateInscriptionToken($token){
        $personalAccessToken = PersonalAccessToken::where('token', $token)->first();
        if ($personalAccessToken && Hash::check('inscription-token', $personalAccessToken->name)) {
            $user = User::find($personalAccessToken->tokenable_id);
            $personalAccessToken->delete();
            return response()->json([
                'student_id' => $user->student_api_id,
                'status' => true,
            ]);
        }
        return response()->json([
            'status' => false,
        ]);
    }
}
