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
                Rule::in(['comic book', 'graphic novel']),
                'nullable'
            ],
            'artists' => 'nullable',
            'writers' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title' => ':attribute è obbligatorio',
            'title.max' => 'Puoi inserire al massimo 50 caratteri compresi gli spazi',
            'thumb' => 'Inserire un URL valido',
            'thumb.ends:with' => "L'URL deve puntare ad un immagine jpg, png o webp",
            'price' => 'Il prezzo deve contenere al massimo due cifre decimali e deve essere compreso tra 1 e 100',
            'series' => 'Puoi inserire al massimo 55 caratteri compresi gli spazi',
            'sale_date' => 'Devi inserire una data valida',
            'type' => 'Selezionare il tipo',
            'type.max' => 'Superato il massimo di 30 caratteri',
        ];
    }
}
