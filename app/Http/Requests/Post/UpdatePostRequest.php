<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'post_name'=> 'sometimes',
            'full_name'=> 'sometimes',
            'email'=> 'sometimes',
            'bank_id'=> 'sometimes',
            'post_group_id'=> 'sometimes',
            'limit'=> 'sometimes',
            'account_number'=> 'sometimes',
            'phone'=> 'sometimes',
            'active_master'=> 'sometimes',
            'active_visa'=> 'sometimes',
            'active_jcb'=> 'sometimes',
            'active_napas'=> 'sometimes',
            'master'=> 'sometimes',
            'visa'=> 'sometimes',
            'jcb'=> 'sometimes',
            'napas'=> 'sometimes',
            'description'=> 'sometimes',
        ];
    }
}
