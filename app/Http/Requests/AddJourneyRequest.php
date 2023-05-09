<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddJourneyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'Job_Title' => 'required',
            'Job_Location' => 'required',
            'Job_Description' => 'required',
            'Month' => 'required',
            'Year' => 'required'
        ];
    }
}
