<?php

namespace App\Http\Controllers;
use Log;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Auth;

class UserController extends Controller
{
    // Api RestFul
    public function index() {
        $all = User::all();
        /*return ['all' => $all];*/
        return view('home', ['all' => $all]);
    }
    public function store() {
        /*return User::create(Input::all());*/
        return User::create(Input::all());
    }
    public function update($userId) {
        User::findOrFail($userId)->update(Input::all());
        $all = User::all();
        return view('home', ['all' => $all]);
        //return view('home');
    }

}
