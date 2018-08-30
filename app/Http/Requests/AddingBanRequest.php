<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddingBanRequest extends FormRequest
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
            'P_Nickname' => 'required',
            'P_ID' => 'required|Integer|min:1',
            'rule' => 'required|numeric|min:1',
            'BanTime' => 'required|Integer|min:1',
            'BanType' => 'required',
        ];
    }
}
