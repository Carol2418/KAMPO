<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'document_type' => ['required', 'string', 'max:255'],
            'document_number' => ['required', 'string', 'max:255'],
            'full_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'document_type' => $input['document_type'],
            'document_number' => $input['document_number'],
            'full_name' => $input['full_name'],
            'city' => $input['city'],
            'state' => $input['state'],
            'address' => $input['address'],
            'age' => $input['age'],
            'gender' => $input['gender'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

        ]);
    }
}
