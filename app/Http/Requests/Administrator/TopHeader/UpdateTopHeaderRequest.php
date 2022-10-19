<?php

namespace App\Http\Requests\Administrator\TopHeader;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTopHeaderRequest extends FormRequest
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
            'email' => ['email', 'max:100'],
            'mobile' => ['required', 'string', 'max:13'],
            'instagram' => ['required', 'string', 'max:100'],
            'facebook' => ['required', 'string', 'max:100'],
            'twitter' => ['required', 'string', 'max:100']
        ];
    }
}
