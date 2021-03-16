<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            'name'     => 'required',
            'email'    => 'unique:users|email',
            'internal_user_id' => 'nullable',
            'password' => 'nullable|min:6|confirmed',
            'phone'    => 'nullable|min:8',
            'is_admin' => 'nullable',
            'registered_at' => 'nullable',
        ];

        if ($this->method() == 'PUT' || $this->method() == 'PATCH') {
            $rules['email'] = 'required|email|unique:users,email,'.$this->route()->parameter('user')->id;
            $rules['password'] = 'confirmed|min:6|nullable';
        }

        return $rules;
    }
}
