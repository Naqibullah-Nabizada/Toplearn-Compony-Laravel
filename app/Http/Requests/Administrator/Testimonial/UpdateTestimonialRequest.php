<?php

namespace App\Http\Requests\Administrator\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
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
            'comment' => ['required', 'string', 'max:1000']
        ];
    }
}
