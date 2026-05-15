<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:80'],
            'phone' => ['nullable', 'string', 'max:20', 'required_without:email'],
            'email' => ['nullable', 'email', 'max:255', 'required_without:phone'],
            'subject' => ['required', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:2000'],
        ];
    }

    public function attributes(): array
    {
        return [
            'full_name' => 'نام و نام خانوادگی',
            'phone' => 'شماره تماس',
            'email' => 'ایمیل',
            'subject' => 'موضوع',
            'message' => 'متن پیام',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'فیلد :attribute الزامی است.',
            'phone.required_without' => 'حداقل یکی از فیلدهای شماره تماس یا ایمیل را وارد کنید.',
            'email.required_without' => 'حداقل یکی از فیلدهای شماره تماس یا ایمیل را وارد کنید.',
            'email' => ':attribute معتبر نیست.',
            'max' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        ];
    }
}
