<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuelLogsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Allow the request to be authorized
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'purchase_date' => 'required|date',
            'distance_travelled' => 'required|integer|min:0',
            'odometer_km' => 'required|integer|min:0',
            'fuel_type' => 'required|in:unleaded,premium,diesel',
            'fuel_quantity' => 'required|numeric|min:0',
            'fuel_price' => 'required|numeric|min:0', 
            'vehicle_id' => 'required|exists:vehicles,vehicle_id',
        ];
    }
}
