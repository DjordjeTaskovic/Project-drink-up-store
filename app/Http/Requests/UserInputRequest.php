<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInputRequest extends FormRequest
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
            'fname' => 'required|max:30|min:2',
            'lname' => 'required|max:30|min:2',
            'email' => 'required|email|unique:users',
            'address' => 'required|min:5',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:password'
        ];
    }

    public function messages(){
        return [
             'required' => 'The :attribute field is required.',
             'firstname.min' => 'Firstame must be longer than :min characters.',
             'lastname.min' => 'Lastame must be longer than :min characters.',
             'address.min' => 'Address must be longer than :min characters.',
             'password.min' => 'Password must be longer than :min characters.',
             'confirmpassword.same' => 'Repeted password must be same.',

        ];
    }
}
