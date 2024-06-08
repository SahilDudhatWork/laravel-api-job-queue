<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Controllers\ApiController;


class SubmissionRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ];
    }
  
    protected function failedValidation(Validator $validator)
    {
        $validatorErrors = $validator->errors()->toArray();
        // Flatten the error array to get a single error message
        $errors = array_reduce($validatorErrors, function ($carry, $item) {
            return array_merge($carry, $item);
        }, []);

        throw new HttpResponseException((new ApiController())->jsonErrorResponse(@$errors[0], [
            'errors' => $errors
        ]));
    }
}
