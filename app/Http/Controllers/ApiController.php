<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class ApiController extends Controller
{
    // Api RestFul

    /**
     * Get all the users
     *
     * @return All users
     */
    public function index() {
        return User::all();
    }
    /**
     * Save an user
     *
     * @return The user created
     */
    public function store() {
        return User::create(Input::all());
    }
    /**
     * Update an user
     *
     * @param $userId: Id of user
     */
    public function update($userId) {
        User::findOrFail($userId)->update(Input::all());
    }
}
