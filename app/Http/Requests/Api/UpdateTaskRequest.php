<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => ['string', 'min:2', 'max:100'],
            'deadline' => ['string', 'min:3', 'max:50'],
            'description' => ['string', 'min:3', 'max:10000'],
            'user_id' => ['required','exists:users,id'],
            'task_status_id' => ['required','exists:task_statuses,id'],
        ];
    }
}
