<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignPartnerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'partners' => ['required' , 'array']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
