<?php

namespace App\Http\Requests\Administrator\Service;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceRequest extends FormRequest
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
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'title_one' => ['required', 'string', 'max:100'],
            'desc_one' => ['required', 'string', 'max:1000'],
            'link_one' => ['required', 'string', 'max:100'],
            'title_two' => ['required', 'string', 'max:100'],
            'desc_two' => ['required', 'string', 'max:1000'],
            'link_two' => ['required', 'string', 'max:100'],
            'title_three' => ['required', 'string', 'max:100'],
            'desc_three' => ['required', 'string', 'max:1000'],
            'link_three' => ['required', 'string', 'max:100']
        ];
    }
}
