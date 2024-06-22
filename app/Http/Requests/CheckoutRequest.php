<?php

namespace App\Http\Requests;

use App\DTO\OrderDTO;
use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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

        /*
         *   'ad_id' => 'required|integer',
            'user_id' => 'required|integer',
            'user_name' => 'required|string',
            'price' => 'required|string',
            'user_email' => 'required|email',
            'ad_title' => 'required|string',
            'comment' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'name' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string',
         */
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:3',
            'phone_number' => 'required|string|max:12',
            'flat_number' => 'required|string|max:12',
        ];
    }

    public function validated($key = null, $default = null)
    {
        $parent = parent::validated($key, $default);

        return new OrderDTO(
            $parent['']
        );
    }
}
