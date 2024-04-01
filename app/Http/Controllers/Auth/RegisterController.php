<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{


    use RegistersUsers;

    protected function create(RegisterRequest $data)
    {
        return User::create([
            'name' => $data['name'],
            'ecole' => $data['ecole'],
            'province' => $data['province'],
            'telephone' => $data['telephone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
