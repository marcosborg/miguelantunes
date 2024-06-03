<?php

namespace App\Http\Requests;

use App\Models\ConsultingForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreConsultingFormRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('consulting_form_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'rgpd' => [
                'required',
            ],
        ];
    }
}
