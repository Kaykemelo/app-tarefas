<?php

namespace App\Http\Requests\Details;

use Illuminate\Foundation\Http\FormRequest;

class DetailsTaskRequest extends FormRequest
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
            'task_id' => 'required|integer|exists:tasks,id|unique:details_task,task_id',

            'description' => 'required|string|max:255'
        ];
    }
}
