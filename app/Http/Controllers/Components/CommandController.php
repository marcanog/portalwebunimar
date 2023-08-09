<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use App\Special_var;
use App\User;
use App\User_old;
use Http;
use Hash;
use Exception;

class CommandController extends Controller
{
    public function updateUsersData()
    {
        ini_set('max_execution_time', 0);
        $errors = [];
        foreach(User_old::get() as $user){
            try {
                $user_data = Http::withHeaders(['Portalunimar-Api-Key' => Hash::make(env('Portalunimar-Api-Key'))])->get('http://170.81.146.173:9100/api/portal_unimar/portal_user/'.$user->email)->json();
                if (isset($user_data['data'])) {
                    User::create([
                        'created_at' => $user->created_at,
                        'updated_at' => $user->updated_at,
                        'document_id' => $user_data['data']['document_id'],
                        'name' => $user_data['data']['name'],
                        'email' => $user_data['data']['email'],
                        'birth' => $user->birth,
                        'phone' => $user->phone,
                        'password' => $user->password,
                        'image' => $user->image,
                        'status_id' => $user->status_id,
                        'remember_token' => $user->remember_token,
                        'teacher_api_id' => $user_data['data']['isTeacher'] ? $user_data['data']['isTeacher']['id'] : null,
                        'student_api_id' => $user_data['data']['isStudent'] ? $user_data['data']['isStudent']['id'] : null,
                        'employee_api_id' => $user_data['data']['isEmployee'] ? $user_data['data']['isEmployee']['id'] : null,
                    ]);
                } else {
                    throw new Exception('El índice "data" no está definido en la respuesta');
                }
            } catch (Exception $e) {
                $errors[] = $user;
            }            
        }
        if (!empty($errors)) {
            echo '
            <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 80%;
                    margin: auto;
                }
                
                td, th {
                    border: 1px solid #ccc;
                    text-align: left;
                    padding: 8px;
                }
                
                tr:nth-child(even) {
                    background-color: #dddddd;
                }
            </style>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>CI</th>
                    <th>Email</th>
                </tr>
            ';
            foreach ($errors as $error) {
                echo 
                '<tr>
                    <td>'.$error->name.'</td>
                    <td>'.$error->document_id.'</td>
                    <td>'.$error->email.'</td>
                </tr>';
            }
            echo 
            '</table>';
        }
        /*foreach(User::where('role_id','<>','2')->get() as $user){
            $user_data = Http::get('http://apis.campus.unimar.edu.ve/api/user_data/'.explode('@',$user->email)[0])->json();
            $user->document_id = $user_data['user_data']['nit'];
            $user->save();
        }*/
    }
    public function clearcache()
    {
        // Clear application cache:
        Artisan::call('cache:clear');
        //Clear config cache:
        Artisan::call('config:cache');
        // Clear view cache:
        Artisan::call('view:clear');
        //Clear route cache:
        Artisan::call('route:clear');
        dd('All done');
    }
    public function dollarValue()
    {
        //Get current hour
        $carbon = new \Carbon\Carbon();
        $date = $carbon::now();
        //Obtain BVC dollar price
        $client = new Client(HttpClient::create(['verify_peer' => false, 'verify_host' => false]));
        $crawler = $client->request('GET', 'https://www.bcv.org.ve/');
        $USB = $crawler->filter("#dolar .col-sm-6.col-xs-6.centrado")->first();
        $TasaBVC = $USB->html();
        $FilterChar = array("<strong>", "</strong>");
        $TasaBVC = str_replace($FilterChar, "", $TasaBVC);
        $TasaRound = round(str_replace(',', '.', $TasaBVC), 2);
        $dbDollar = Special_var::where('name', "Dollar BCV")->get()[0];
        //Update dollar price if the BCV price is different than the DB one
        if($dbDollar->value != $TasaRound && $date->toTimeString() < 12){
            $dbDollar->value = $TasaRound;
            $dbDollar->save();
        }
        return response(Special_var::where('name', "Dollar BCV")->get()[0]['value']);
    }
    public function setLocale($locale){
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
