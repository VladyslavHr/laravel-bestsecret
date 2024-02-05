<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class UpdateUserRequest extends FormRequest
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
        // $userId = $this->route('user');
        $userId = $this->route('user')->id;

        Log::debug('User ID: ' . $this->route('user')->id);
        Log::debug('Phone input: ', ['phone' => $this->phone]);
        $rules = [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $userId,
            'phone' => 'nullable|phone:AUTO',
        ];

        // Проверка, выбран ли чекбокс 'firm_buy'
        // if ($this->has('firm_buy')) {
        //     $rules['firm'] = 'required';
        //     $rules['identification_num'] = 'required';
        // } else {
        //     $rules['firm'] = '';
        //     $rules['identification_num'] = '';
        // }
        // if ($this->has('bill_equal_address')) {
        //     $rules['firm'] = '';
        //     $rules['identification_num'] = '';
        //     $rules['name_bill'] = '';
        //     $rules['last_name_bill'] = '';
        //     $rules['email_bill'] = '';
        //     $rules['phone_bill'] = '';
        //     $rules['street_bill'] = '';
        //     $rules['add_address_bill'] = '';
        //     $rules['post_code_bill'] = '';
        //     $rules['city_bill'] = '';
        // } else {
        //     $rules['firm_bill'] = 'required';
        //     $rules['identification_num_bill'] = 'required';
        //     $rules['name_bill'] = 'required';
        //     $rules['last_name_bill'] = 'required';
        //     $rules['email_bill'] = 'required';
        //     $rules['phone_bill'] = 'required';
        //     $rules['street_bill'] = 'required';
        //     $rules['add_address_bill'] = 'required';
        //     $rules['post_code_bill'] = 'required';
        //     $rules['city_bill'] = 'required';
        // }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your First Name.',
            'last_name.required' => 'Please enter your Last Name.',
            'email.required' => 'Please enter your Email.',
            'phone.phone' => 'Please enter a valid Phone Number with country code.',
        ];
    }
}
