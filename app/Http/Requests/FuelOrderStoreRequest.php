<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuelOrderStoreRequest extends FormRequest
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
            'super_ecto_100' => 'required|integer',
            'super_ecto' => 'required|integer',
            'premium' => 'required|integer',
            'regular' => 'required|integer',
            'diesel' => 'required|integer',
            'sum' => 'required',
            'discount' => 'required',
            'super_ecto_100_price' => 'required',
            'super_ecto_price' => 'required',
            'premium_price' => 'required',
            'regular_price' => 'required',
            'diesel_price' => 'required',
            'sum_liter' => 'required'
        ];
    }
}
