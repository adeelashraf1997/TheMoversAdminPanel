<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\BaseRequest;

class CreateUserRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'mobile'=>'required|mobile_number|min:8',
            'email'=>'required|email',
            // 'address'=>'required|min:10',
            // 'state'=>'max:100',
            // 'city'=>'required',
            'country'=>'required|exists:countries,id',
            // 'gender'=>'required|in:male,female,others',
            // 'postal_code'=>'required|numeric',
            // 'password'=>'required|min:8|max:32|confirmed'

        ];
    }
}
