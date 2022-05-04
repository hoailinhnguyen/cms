<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'post_name'=> 'required',
            'full_name'=> 'required',
            'email'=> 'required',
            'bank_id'=> 'required',
            'post_group_id'=> 'required',
            'limit'=> 'required',
            'account_number'=> 'required',
            'phone'=> 'required',
            'active_master'=> 'required',
            'active_visa'=> 'required',
            'active_jcb'=> 'required',
            'active_napas'=> 'required',
            'master'=> 'required',
            'visa'=> 'required',
            'jcb'=> 'required',
            'napas'=> 'required',
            'description'=> 'required',
        ];
    }
}
