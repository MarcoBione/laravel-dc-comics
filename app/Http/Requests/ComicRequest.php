<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title'=> 'required|unique:comics|max:255',
            'description'=>'required',
            'thumb'=>'max:255',
            'price'=> 'required',
            'series'=> 'required|max:100',
            'type'=> 'required|max:50'
        ];
    }
}
