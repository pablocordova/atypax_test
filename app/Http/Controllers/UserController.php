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

    public function index() {
        try {
 
            $client = new GuzzleHttpClient();
            $apiRequest = $client->request('GET', 'localhost');
            $content = json_decode($apiRequest->getBody()->getContents());
            return view('home', ['all' => $content]);
     
        } catch (RequestException $re) {
            //
        }
    }

    public function store() {
        try {
            $data = Input::all();
            $data['password'] = bcrypt($data['password']);

            $client = new GuzzleHttpClient();
            $apiRequest = $client->request('POST', 'localhost',['body' => $data]);
            return view('home');
     
        } catch (RequestException $re) {
            //
        }
    }

    public function update($userId) {
        try {
            $data = Input::all();
            $data['password'] = bcrypt($data['password']);

            $client = new GuzzleHttpClient();
            $apiRequest = $client->request('PUT', 'localhost/${userId}',['body' => $data]);
            return view('home');
     
        } catch (RequestException $re) {
            //
        }
    }

}
