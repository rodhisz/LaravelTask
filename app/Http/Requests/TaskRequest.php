<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
        // cara untuk update data unique biar ga already taken
        $tasks_rule_unique = Rule::unique('tasks', 'tasks');
        if($this -> method() !== 'POST'){
            $tasks_rule_unique -> ignore($this->route()->parameter('id'));
        }

        return [
            'tasks' => ['required', $tasks_rule_unique],
            'time' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Kolom :attribute harus diisi',
            'time.required' => 'Waktu ga boleh kosong'
        ];
    }
}
