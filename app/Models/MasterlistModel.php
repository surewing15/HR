<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterlistModel extends Model
{
    use HasFactory;

    protected $table = 'masterlist';


    protected $fillable = [
        'employee_id',
        'full_name',
        'last_name',
        'first_name',
        'middle_initial',
        'contact_information',
        'employment_status',
        'job_title',
        'department',
        'job_type'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


}