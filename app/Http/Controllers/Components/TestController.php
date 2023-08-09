<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;
use Auth;
use Illuminate\Support\Arr;
use Goutte\Client;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpClient\HttpClient;
use App\User;
use App\Permission;
use App\Status;
use Hash;

class TestController extends Controller
{
    public function index(){
        $user = User::find(1);
        $accessToken = $user->createToken('inscriptionToken',['user:inscript'])->accessToken;
        dd($accessToken->can('user:inscript'));
        $accessToken = PersonalAccessToken::find(33);
        dd($accessToken);
        $user = User::find(1);
        $accessToken = $user->createToken('inscriptionToken',['user:inscript'])->accessToken;
        dd($accessToken->can('user:inscript'));
    }
}
