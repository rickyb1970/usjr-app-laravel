<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SchoolUpdateRequest extends FormRequest
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
        if($this->has('clearChanges')){
            return [];
        }

        $school = $this->route('school');

        return [
            'schoolFullName' => ['required','regex:/^[A-Za-z\s\-\,\/]+$/',Rule::unique('schools','schoolfullname')->ignore($school)],
            'schoolShortName' => ['required','regex:/^[A-Za-z\s\-\,\/]+$/',Rule::unique('schools','schoolshortname')->ignore($school)],
        ];
    }

    public function messages(): array {
        return [
            'schoolFullName.required' => 'School Full Name entry cannot be empty. Restoring original entries.',
            'schoolFullName.regex' => 'Invalid School Full Name entry or format. Restoring original entries.',
            'schoolFullName.unique' => 'School Full Name already exists. Restoring original entries.',

            'schoolShortName.required' => 'School Short Name entry cannot be empty. Restoring original entries.',
            'schoolShortName.regex' => 'Invalid School Short Name entry or format. Restoring original entries.',
            'schoolShortName.unique' => 'School Short Name already exists. Restoring original entries.',
        ];
    }

    public function prepareForValidation(): void {

    }


    public function after(): array {
        // return [
        //     function (Validator $validator) {
        //         $school = $this->route('school'); // Access the model via route model binding

                // dd($school);

                // Get the input data (only the fields we're interested in)
                // $inputSchoolFullName = $this->input('schoolFullName');
                // $inputSchoolShortName = $this->input('schoolShortName');

                // dd($inputSchoolFullName, $inputSchoolShortName, $school->schoolfullname, $school->schoolshortname);

                // dd($inputSchoolFullName === $school->schoolfullname && $inputSchoolShortName === $school->schoolshortname);

                // Check if the inputs are identical to the original values
        //         if ($inputSchoolFullName === $school->schoolfullname && $inputSchoolShortName === $school->schoolshortname) {
        //             $validator->errors()->add('same-entry', 'The values are the same as the original values.');
        //         }
        //     }
        // ];

        return [
            function(){
                session()->flash('failure','School entry modifications are not accepted.');
            }
        ];
    }

}
