<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    //
    public function index() {
        return User::all();
    }
    public function store() {
        return User::create(Input::all());
    }
    public function show($id) {
        return User::findOrFail($id);
    }
    public function update($userId) {
        User::findOrFail($userId)->update(Input::all());
    }

}
