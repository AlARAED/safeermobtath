<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApllicationRequest extends FormRequest
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
            'country_id' => 'required',
            'city_id' => 'required',
            'university_id' => 'required',
            'field' => 'required',
            'specialty' => 'required',
            'degree_id' => 'required',
            'email' => 'required',
            'passport_img' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'country_id.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'city_id.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'university_id.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'field.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'specialty.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'degree_id.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'email.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',
            'passport_img.required' => 'تنبيه!عليك ادخال جميع الحقول الفارغة',


        ];
    }


}
