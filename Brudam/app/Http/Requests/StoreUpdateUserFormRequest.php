<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
            'title' => 'required|string|max:255|min:5|regex:/^[a-záàâãéèêíïóôõöúçñ ]+$/i',
            'description' => 'required|string|max:255|min:3|regex:/^[a-záàâãéèêíïóôõöúçñ , \.]+$/i',
            'city' => 'required|string|max:255|min:5|regex:/^[a-záàâãéèêíïóôõöúçñ , \.]+$/i',
            'date' => 'required'
            
        ];
        
    }

    public function messages()
    {
        return[

            'title.required' => 'O campo titulo do pedido é obrigatório',
            'description.required' => 'O campo descrição do pedido é obrigatório',
            'city.required' => 'O campo cidade é obrigatório',
            'date.required' => 'O campo data de entrega é obrigatório',
            
            'title.regex' => 'Caracteres especiais não são permitidos no campo titulo',
            'description.regex' => 'Caracteres especiais não são permitidos no campo descrição do pedido',
            'city.regex' => 'Caracteres especiais não são permitidos no campo cidade',

            'title.min' => 'O mínimo de caracteres aceito no campo titulo são 5',
            'title.max' => 'O máximo de caracteres aceito no campo titulo são 255',
            'description.min' => 'O mínimo de caracteres aceito no campo titulo são 5',
            'description.max' => 'O máximo de caracteres aceito no campo titulo são 255',
            'city.min' => 'O mínimo de caracteres aceito no campo titulo são 5',
            'city.max' => 'O máximo de caracteres aceito no campo titulo são 255'

        ];
    }

    
}
