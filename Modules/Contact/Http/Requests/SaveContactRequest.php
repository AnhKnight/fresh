<?php

namespace Modules\Contact\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveContactRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'fullname' => ['required'],
            'address' => ['required'],
            'phone' => ['required', 'numeric'],
            'body' => ['required'],
        ];
    }

    public function messages(){
        return [
            'email.required'    => 'Trường này không được để trống',
            'email.email'    => 'Trường này phải là địa chỉ email',
            'fullname.required'    => 'Trường này không được để trống',
            'address.required'    => 'Trường này không được để trống',
            'phone.required'    => 'Trường này không được để trống',
            'phone.numeric'    => 'Trường này chỉ được nhập số',
            'body.required'    => 'Trường này không được để trống',
        ];
    }
}
