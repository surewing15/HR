<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterlistModel extends Model
{
    use HasFactory;


    protected $table = 'masterlist';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'status',
        'birthdate',
        'position_title',
        'contact_number',
        'educational_attainment',
        'department',
        'salary',
        'email',
        'work_status',
        'job_type'
    ];
}