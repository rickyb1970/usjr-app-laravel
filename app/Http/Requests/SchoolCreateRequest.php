<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class SchoolCreateRequest extends FormRequest
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
    public function rules(): array | RedirectResponse
    {
        if($this->has('clearEntries')){
            return [];
        }

        return [
            'schoolID' => 'required|regex:/^[0-9]+$/|unique:schools,schoolid',
            'schoolFullName' => 'required|regex:/^[A-Za-z\s\-\,\/]+$/|unique:schools,schoolfullname',
            'schoolShortName' => 'required|regex:/^[A-Za-z\s\-\,\/]+$/|unique:schools,schoolshortname',
        ];
    }

    public function messages(): array
    {
        return [
            'schoolID.required' => 'School ID entry cannot be empty.',
            'schoolID.regex' => 'Invalid ID entry or format.',
            'schoolID.unique' => 'School ID already exists.',

            'schoolFullName.required' => 'School Full Name entry cannot be empty.',
            'schoolFullName.regex' => 'Invalid School Full Name entry or format.',
            'schoolFullName.unique' => 'School Full Name already exists.',

            'schoolShortName.required' => 'School Short Name entry cannot be empty.',
            'schoolShortName.regex' => 'Invalid School Short Name entry or format.',
            'schoolShortName.unique' => 'School Short Name already exists.',
        ];
    }

    public function after(){
        return [
            function(){
                session()->flash('failure','School entry is not accepted.');
            }
        ];
    }
}
