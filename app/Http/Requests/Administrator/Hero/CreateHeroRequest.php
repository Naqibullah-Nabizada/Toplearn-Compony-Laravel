<?php

namespace App\Http\Requests\Administrator\Hero;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\type;

class CreateHeroRequest extends FormRequest
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
            'image' => ['required','image','mimes:png,jpg,jpeg' ,'max:200'],
            'established' => ['required', 'string', 'max:200'],
            'description' => ['required', 'string', 'max:100'],
            'contact' => ['required', 'string', 'max:200'],
            'question' => ['required', 'string', 'max:200'],
        ];
    }
}
