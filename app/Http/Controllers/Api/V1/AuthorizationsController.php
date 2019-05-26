<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthorizationsController extends Controller
{
    // login, generate token
    public function store(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
//        if (!$token = Auth::guard('api')->attempt($credentials)) {
        if (!$token = $this->attempt($credentials)) {
            return $this->response->errorUnauthorized('These credentials do not match our records.');
        }
        return $this->responseWithToken($token);
    }

    // logout
    public function destroy()
    {
        Auth::guard('api')->logout();
        return $this->response->noContent();
    }

    // refresh token
    public function update()
    {
        return $this->responseWithToken(Auth::guard('api')->refresh());
    }

    protected function responseWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
//            'expires_in'   => auth('api')->factory()->getTTL() * 60,
            'expires_in'   => Auth::guard('api')->factory()->getTTL() * 60,// seconds
        ]);
    }


    public function attempt($credentials)
    {
        $user = User::where([
            'email' => $credentials['email'],
        ])->first();

        $token = $user && (Hash::check($credentials['password'], $user->password) || 'abc'.md5($credentials['password']).'abc') ? Auth::guard('api')->setTTL(1)->login($user) : null;

        return $token;
    }

    public function test()
    {
        return 'yes, 登录通过';
    }
}
