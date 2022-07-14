<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'organizer' => 'required|string|max:225',
            'title' => 'required|string|max:225',
            'category' => 'required|string|max:225',
            'faculty' => 'required|string|max:225',
            'date_and_time' => 'required|date',
            'location' => 'required|string|max:225',
            'registration_link' => 'required|string|max:225',
            'description' => 'required|string|max:225',
            'poster' => 'required|string|max:225',
        ];
    }
}
