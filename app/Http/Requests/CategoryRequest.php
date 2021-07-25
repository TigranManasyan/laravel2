<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'category_name' => 'min:5|max:40'
        ];
    }
    public function messages() {
        return [
            'min' => 'minimum@ 5 simvol',
            'max' => 'maximum 40 simvol'
        ];
    }
}