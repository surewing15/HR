<?php

namespace App\Imports;

use App\Models\EmployeeModel;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeesImport implements ToModel
{
    public function model(array $row)
    {
        return new EmployeeModel([
            'surname'       => $row[0],
            'first_name'    => $row[1],
            'middle_name'   => $row[2],
            'date_of_birth' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3]),
            // Add other fields as per the structure of your Excel file
        ]);
    }
}