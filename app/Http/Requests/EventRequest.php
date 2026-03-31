<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'theme' => 'required|string|max:255',
            'event_date' => 'required|date',
            'guests' => 'required|string|max:255',
            // 'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner' => 'required|string',
            'position' => 'required|string',
            "location" => 'required|string|max:255',
        ];
    }
}
