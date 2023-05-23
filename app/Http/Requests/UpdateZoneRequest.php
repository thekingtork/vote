<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Styde\Html\Facades\Alert;

class UpdateZoneRequest extends FormRequest
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
            'name' => ['required','min:3','string','max:140',Rule::unique('points','name')->ignore($this->zone)]
        ];
    }

    protected function failedValidation(Validator $validator){
        Alert::message('La zona no fue guardada, se presentaron los siguientes errores:', 'danger')->items($validator->errors());
        return parent::failedValidation($validator);
    }

    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'name.unique' => 'Este nombre ya está en uso',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Nombre',
        ];
    }
}
