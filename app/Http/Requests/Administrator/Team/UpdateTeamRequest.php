<?php

namespace App\Http\Requests\Administrator\Team;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
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
            'image' => ['image', 'mimes:png,jpg,jpeg'],
            'name' => ['required', 'string', 'max:100'],
            'job' => ['required', 'string', 'max:100'],
            'instagram' => ['required', 'string', 'max:100'],
            'facebook' => ['required', 'string', 'max:100'],
            'twitter' => ['required', 'string', 'max:100'],
            'linkedin' => ['required', 'string', 'max:100']
        ];
    }
}
