<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class IsBabySetterRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        return User::whereId($value)->firstOrFail()->user_type === User::BABY_SERTERIES;
    }

    public function message(): string
    {
        return 'this user is not a baby setter.';
    }
}
