<?php

namespace App\Imports;

use App\Models\User1;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class UserDataImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Check if a user with the same email already exists
        if (!User1::where('email', $row['email'])->exists()) {
            return new User1([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make('default_password'), // Or set to null if allowed
            ]);
        }

        // Return null if the user already exists to skip the record
        return null;
    }
}