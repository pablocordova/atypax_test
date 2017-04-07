<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class ApiController extends Controller
{
    // Api RestFul
    public function index() {
        return User::all();
    }
    public function store() {
        return User::create(Input::all());
    }
    public function update($userId) {
        User::findOrFail($userId)->update(Input::all());
    }
}
