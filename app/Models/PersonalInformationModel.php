<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInformationModel extends Model
{
    protected $table = 'personal_informations';
    public $timestamps = true; // or false if not needed
    protected $primaryKey = 'id';
    protected $fillable = [
        'employee_id',
        'surname',
        'first_name',
        'middle_name',
        'name_extension',
        'date_of_birth',
        'place_of_birth',
        'sex',
        'civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_no',
        'pagibig_no',
        'philhealth_no',
        'sss_no',
        'tin_no',
        'agency_employee_no',
        'citizenship',
        'citizenship_type',
        'residential_address',
        'residential_zip_code',
        'permanent_address',
        'permanent_zip_code',
        'telephone_no',
        'mobile_no',
        'email'
    ];
    public function familyBackground()
    {
        return $this->hasOne(FamilyBackgroundModel::class, 'personal_informations_id');
    }

    public function children()
    {
        return $this->hasMany(ChildrenModel::class, 'personal_informations_id');
    }

    public function educationalBackgrounds()
    {
        return $this->hasMany(EducationalBackgroundModel::class, 'personal_informations_id');
    }

    public function civilServiceEligibilities()
    {
        return $this->hasMany(CivilServiceEligibilityModel::class, 'personal_informations_id');
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperienceModel::class, 'personal_informations_id');
    }

    public function voluntaryWorks()
    {
        return $this->hasMany(VoluntaryWorkModel::class, 'personal_informations_id');
    }

    public function learningDevelopments()
    {
        return $this->hasMany(LearningDevelopmentModel::class, 'personal_informations_id');
    }

    public function otherInformation()
    {
        return $this->hasMany(OtherInformationModel::class, 'personal_informations_id');
    }
}