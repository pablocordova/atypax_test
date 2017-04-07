<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class UserController extends Controller
{
    /** Consume the API to get all users
     *
     * @return view 'home'
     */
    public function index() {
        try {
 
            $client = new GuzzleHttpClient();
            $apiRequest = $client->request('GET', 'http://atypaxtest.herokuapp.com/api');
            $content = json_decode($apiRequest->getBody()->getContents());
            return view('home', ['all' => $content]);
     
        } catch (RequestException $re) {
            //
        }
    }

    /**
     * Consume the API to get save an user
     *
     * @return view 'home'
     */
    public function store() {
        try {
            $data = Input::all();
            $data['password'] = bcrypt($data['password']);

            $client = new GuzzleHttpClient();
            $apiRequest = $client->request('POST', 'http://atypaxtest.herokuapp.com/api', [
                'form_params' => [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => $data['password']
                ]
            ]);
            return redirect()->action('UserController@index');
     
        } catch (RequestException $re) {
            dd($re);
        }
    }

    /**
     * Consume the API to get update an user
     *
     * @para $userId: Id of user
     * @return view 'home'
     */
    public function update($userId) {
        try {
            $data = Input::all();
            $client = new GuzzleHttpClient();
            $address = 'http://atypaxtest.herokuapp.com/api/'.$userId;
            $apiRequest = $client->request('PUT', $address, [
                'form_params' => [
                    'name' => $data['name'],
                    'email' => $data['email']
                ]
            ]);

            return redirect()->action('UserController@index');
     
        } catch (RequestException $re) {
            dd($re);
        }
    }

}
