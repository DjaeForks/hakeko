<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation;
class PostulerRequest extends FormRequest
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
          'name'=> 'required|string|max:255',
          'f1'=> 'required|mimes:pdf',
          'f2'=> 'required|mimes:pdf',
          'f3'=> 'required|mimes:pdf',
        ];
    }
}
