<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::paginate(10));
    }


    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
        ]);

        $user->update($data);
        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response(null, 204);
    }

    public function test()
    {
//        sleep(5);
        return response([
            'id'    => '1',
            'name'  => 'alpha',
            'email' => '5a4dgfa@gmail.com',
        ]);
    }
}
