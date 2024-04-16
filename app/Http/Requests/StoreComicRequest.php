<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|max:100',
            'description' => 'required|max:8000',
            'thumb'=> 'nullable|max:8000',
            'price'=> 'required|max:30',
            'series'=> 'required|max:50',
            'sale_date'=> 'required|date|max:10',
            'type'=> 'required|max:100',
            'artists'=> 'required|max:500',
            'writers'=> 'required|max:500'
        ];
    }

    public function messages(): array {
        return [
            'required'=> 'Hai dimenticato di inserire :attribute',
            'max'=> 'Il valore inserito in :attribute ha superato il valore :max di caratteri',
        ];
    }

    public function attributes(): array{
        return [

        'title'=> 'Titolo',
        'description' => 'Descrizione',
        'thumb'=> 'Immagine',
        'price'=> 'Prezzo',
        'series'=> 'Serie',
        'sale_date'=> 'Data di uscita',
        'type'=> 'Tipologia',
        'artists'=> 'Artisti',
        'writers'=> 'Scrittori',
        
        ];
    }
}
