<?php

namespace Sakib\AsifAuth\Http\Requests;

use Sakib\AsifAuth\Classes\AuthRegister;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return AuthRegister::validationRules();
    }
}
