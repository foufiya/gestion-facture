<?php

namespace App\Http\Requests\AdminAuth;

use Illuminate\Cache\RateLimiter;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }
    /**
     * 
    *@return array<string,>
    */

    public function rules():array
    {
        return [
            'email' => 'required','string','email',
            'password' => 'required','string',
        ];
    }


    /*
    *
    * @throws \Illuminate\ValidationException
     */

     public function authenticate(): void
     {
         $this->ensureIsNotRateLimited();
 
         if (! Auth::guard('admin')->attempt($this->only('email', 'password'), $this->boolean('remember'))) {
             RateLimiter::hit($this->throttleKey());
 
             throw ValidationException::withMessages([
                 'email' => trans('auth.failed'),
             ]);
         }
 
         RateLimiter::clear($this->throttleKey());
     }
 

    /**
     * Ensure the login is not rate limmited
     * 
     * @throws \Illuminate\Validation\ValidationException
     */

     public function ensureIsNotRateLimited(): void
     {
         if(!RateLimiter::tooManyAttempts($this->throttlekey(),5)){
            return;
         }
     }


    public function messages()
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Password is required',
        ];
    }
}
