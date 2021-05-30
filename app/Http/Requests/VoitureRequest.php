<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoitureRequest extends FormRequest
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
            'nom'=>'required',
            'selectmarque'=>'required',
            'selectagence'=>'required',
           // 'selecttype'=>'required',
            'selectcolor'=>'required',
            'selectcarburant'=>'required',
            'prix'=>'required',
           // 'Luggage'=>'required',
            'KM'=>'required',
            //'seats'=>'required',
            'description'=>'required'
        ];
    }
}
