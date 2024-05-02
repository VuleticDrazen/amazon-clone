<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'street' => ['required', 'string', 'max:255'],
            'flat_number' => ['required', 'string', 'max:12'],
            'city' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:8'],
            'country' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * @param $key
     * @param $default
     * @return mixed
     */
    public function validated($key = null, $default = null): array
    {
        $parent = parent::validated($key, $default);
        $parent['user_id'] = auth()->id();
        return $parent;
    }
}
