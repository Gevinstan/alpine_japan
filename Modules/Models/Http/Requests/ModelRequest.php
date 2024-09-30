<?php

namespace Modules\Models\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('post')) {
            $rules = [
                'category'=>'required',
                'image'=>'required',
                'model'=>'required'
            ];
        }

        if ($this->isMethod('put')) {
            $rules = [
                'category'=>'required',
                'model'=>'required'
            ];
        }
        return $rules;
    }
}
