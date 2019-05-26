<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;


class UsersController extends Controller
{
    public function store(UserRequest $request)
    {
        $user = User::create($request->all());
        return response($user, 201);
    }
}
