<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherInformationModel extends Model
{
    protected $table = 'other_information';
    public $timestamps = true; // or false if not needed
    protected $primaryKey = 'id';
    protected $fillable = ['special_skills', 'distinctions', 'membership'];


    public function personalInformation()
    {
        return $this->belongsTo(PersonalInformationModel::class, 'personal_informations_id');
    }
}