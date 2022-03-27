<?php

namespace App\Http\Requests;

use App\Rules\IsBabySetterRule;
use Illuminate\Foundation\Http\FormRequest;

class BabyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'baby_setter_id' => ['nullable' , 'exists:users,id' , new IsBabySetterRule()]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
