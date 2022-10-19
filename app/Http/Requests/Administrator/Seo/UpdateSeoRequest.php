<?php

namespace App\Http\Requests\Administrator\Seo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeoRequest extends FormRequest
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
            'title' => ['string', 'max:200'],
            'description' => ['required', 'string', 'max:1000'],
            'keywords' => ['required', 'string', 'max:200'],
            'site_name' => ['required', 'string', 'max:200'],
            'site_url' => ['required', 'string', 'max:200'],
            'twitter_name' => ['required', 'string', 'max:100'],
            'twitter_description' => ['required', 'string', 'max:1000']
        ];
    }
}
