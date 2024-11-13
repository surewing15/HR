<?php

namespace App\Imports;

use App\Models\MasterlistModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class EmployeesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $birthdate = $this->parseDateValue($row['birthdate']);

        return new MasterlistModel([
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'middle_name' => $row['middle_name'],
            'gender' => $row['gender'],
            'status' => $row['status'],
            'birthdate' => $birthdate,
            'position_title' => $row['position_title'],
            'contact_number' => $row['contact_number'],
            'educational_attainment' => $row['educational_attainment'],
            'salary' => $row['salary'],
            'email' => $row['email'],
            'work_status' => $row['work_status'],
            'job_type' => $row['job_type'],
        ]);
    }

    /**
     * Parse date value from various formats to Y-m-d
     *
     * @param mixed $value
     * @return string|null
     */
    private function parseDateValue($value)
    {
        if (empty($value)) {
            return null;
        }

        try {
            // Handle Excel serial numbers
            if (is_numeric($value)) {
                return Date::excelToDateTimeObject($value)->format('Y-m-d');
            }

            // Handle string dates
            if (is_string($value)) {
                // Try common date formats
                $formats = [
                    'd/m/Y',
                    'm/d/Y',
                    'Y-m-d',
                    'd-m-Y',
                    'Y/m/d',
                ];

                foreach ($formats as $format) {
                    $date = Carbon::createFromFormat($format, $value);
                    if ($date !== false) {
                        return $date->format('Y-m-d');
                    }
                }
            }

            // If all parsing attempts fail, try Carbon's parse method
            return Carbon::parse($value)->format('Y-m-d');

        } catch (\Exception $e) {
            // Log the error or handle it as needed
            \Log::warning("Date parsing failed for value: " . $value);
            return null;
        }
    }
}
