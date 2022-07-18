<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'product-name'=>'required',
            'category' => 'required',
            'year'=> ['required', 'integer'],
        ];
    }
    protected function prepareForValidation(){
        $this->merge([
            'guitar-name' => strip_tags($this['product-name']),
            'category' => strip_tags($this->category),
            'year'=>strip_tags($this->year)
        ]);
    }
}
