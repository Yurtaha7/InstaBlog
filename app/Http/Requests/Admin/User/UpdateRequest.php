<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email'. $this->user_id,
            'user_id'=>'required|integer|exists:users_id',
            'role' => 'required|integer',
        ];
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
      ];
    }
}
