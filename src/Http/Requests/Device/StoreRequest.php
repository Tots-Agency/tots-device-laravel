<?php

namespace Tots\Device\Http\Requests\Device;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'device_type' => ['required', 'integer'],
            'device_token' => ['required', 'string'],
            'app_version' => ['nullable', 'string'],
            'device_model' => ['nullable', 'string'],
            'language_id' => ['nullable', 'integer']
        ];
    }
}
