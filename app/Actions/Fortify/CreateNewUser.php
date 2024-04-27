<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'no_hp' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'umur' => ['required', 'numeric', 'max:255'],
            'is_admin' => ['boolean'],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'no_hp' => $input['no_hp'],
            'alamat' => $input['alamat'],
            'umur' => $input['umur'],
            'is_admin' => $input['is_admin'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
