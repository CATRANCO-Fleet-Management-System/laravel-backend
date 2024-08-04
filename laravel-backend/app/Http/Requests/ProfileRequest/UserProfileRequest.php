<?php

namespace App\Http\Requests\ProfileRequest;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_initial' => 'nullable|string|max:1',
            'license_number' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'user_id' => 'nullable|integer|exists:users,user_id',
        ];
    }
}
