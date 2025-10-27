<?php

namespace App\Http\Requests\membership;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MembershipAdminRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => ['required', 'string', 'max:50'],
            'model' => ['required', 'string', 'max:50'],
            'country' => ['required', 'string', 'max:50'],
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
