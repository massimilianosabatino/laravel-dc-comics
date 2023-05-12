<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicFormRequest extends FormRequest
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
            'title' => 'max:50|required',
            'description' => 'nullable',
            'thumb' => 'url|nullable|ends_with:png,jpg,jpeg,webp',
            'price' => 'decimal:2|between:1,100',
            'series' => 'max:55|nullable',
            'sale_date' => 'date',
            'type' => [
                'max:30',
                Rule::in(['comic book', 'graphic novel'])
            ],
            'artists' => 'nullable',
            'writers' => 'nullable'
        ];
    }
}
