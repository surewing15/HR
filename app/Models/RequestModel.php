<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model
{
    protected $table = 'tbl_coe_req';
    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'Position',
        'DateStarted',
        'MonthlyCompensationText',
        'MonthlyCompensationDigits',
    ];
}
