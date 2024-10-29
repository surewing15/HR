<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;

    protected $table = 'users'; // Replace with your actual table name if different

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}