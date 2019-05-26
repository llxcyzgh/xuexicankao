<?php

namespace App\Http\Controllers\Api\V1;

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
