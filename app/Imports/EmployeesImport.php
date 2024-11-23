<?php

namespace App\Imports;

use App\Models\MasterlistModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class EmployeesImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new MasterlistModel([
            'employee_id' => $row['employee_id_number'],
            'last_name' => $row['last_name'],
            'first_name' => $row['first_name'],
            'middle_initial' => $row['middle_initial'],
            'contact_information' => $row['contact_information'],
            'employment_status' => $row['employment_status'],
            'job_title' => $row['job_title'],
            'department' => $row['department'],
        ]);
    }

    public function rules(): array
    {
        return [
            'employee_id_number' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'first_name' => 'required|string|max:100',
            'middle_initial' => 'nullable|string|max:1',
            'contact_information' => 'required|string|max:100',
            'employment_status' => 'required|string|max:50',
            'job_title' => 'required|string|max:100',
            'department' => 'required|string|max:100',
        ];
    }
}