<?php

namespace App\Http\Requests\Room;

use Illuminate\Foundation\Http\FormRequest;

class SearchUnavailableRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'search' => 'nullable|string|min:3|max:255'
        ];
    }
}
