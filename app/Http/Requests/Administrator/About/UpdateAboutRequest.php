<?php

namespace App\Http\Requests\Administrator\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            'image' => ['image', 'mimes:png,jpg,jpeg', 'max:100'],
            'title' => ['required', 'string', 'max:100'],
            'subtitle' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:1000'],
            'helper' => ['required', 'string', 'max:100'],
            'service_title_one' => ['required', 'string', 'max:100'],
            'service_desc_one' => ['required', 'string', 'max:100'],
            'service_title_two' => ['required', 'string', 'max:100'],
            'service_desc_two' => ['required', 'string', 'max:100'],
            'service_title_three' => ['required', 'string', 'max:100'],
            'service_desc_three' => ['required', 'string', 'max:100'],
            'service_title_four' => ['required', 'string', 'max:100'],
            'service_desc_four' => ['required', 'string', 'max:100'],
            'experience_title_one' => ['required', 'string', 'max:100'],
            'experience_desc_one' => ['required', 'string', 'max:100'],
        ];
    }
}
