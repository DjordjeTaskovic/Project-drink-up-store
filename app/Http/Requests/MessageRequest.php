<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required|max:50|min:2',
            'message' => 'required|max:255|min:2'
        ];
    }

    public function messages(){
        return [
            'required' => 'The :attribute field is required.',
            'subject.max' => 'Subject must not be longer than :max characters.',
            'subject.min' => 'Subject must be longer than :min characters.',
            'message.max' => 'Message must not be longer than :max characters.',
            'message.min' => 'Message must be longer than :min characters.'
        ];
    }
}
