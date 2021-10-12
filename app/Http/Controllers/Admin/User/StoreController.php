<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data =$request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate(['email'=> $data['email']], $data);
        return redirect()->route('admin.user.index');
    }

    public function messages()
    {
        return [
            'name.required' => 'Заполните поле!',
            'name.string' => 'Имя должно быть строкой!!',
            'email.required' => 'Заполните поле!',
            'email.string' => 'Почта должна быть строкой!',
            'email.email' => 'Почта несоответстует формату!',
            'email.unique' => 'Пользователь с таким e-mail уже существует!',
            'password.required' => 'Почта несоответстует формату!',
            'password.unique' => 'Пользователь с таким e-mail уже существует!',
        ];
    }
}
