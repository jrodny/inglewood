<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateEditUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('id');

        $rules = [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
        ];

        if ($this->isMethod('PUT')) {
            $rules = array_merge($rules, [
                'username' => [
                    'required',
                    'string',
                    'min:5',
                    'max:255',
                    Rule::unique('users', 'username')->ignore($userId),
                ],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique('users', 'email')->ignore($userId),
                ],
            ]);
        } else {
            $rules = array_merge($rules, [
                'username' => [
                    'required',
                    'string',
                    'min:5',
                    'max:255',
                    'unique:users',
                ],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:users,email',
                ]
            ]);
        }

        return $rules;
    }
}
