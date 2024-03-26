<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ProfileInformation extends Model
{


    use HasFactory, Notifiable, SoftDeletes;

    protected $table="profile_informations";
    protected $fillable = [
        'first_name',
        'middle_name',
        'surname',
        'extension',
        'birthday',
        'birthplace',
        'sex',
        'civil_status',
        'other_civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_id',
        'pagibig_id',
        'sss_id',
        'philhealth_id',
        'tin',
        'agency_id',
        'citizenship1',
        'citizenship2',
        'citizenship3',
        'res_house',
        'res_street',
        'res_subdivision',
        'res_barangay',
        'res_municipality',
        'res_province',
        'res_zipcode',
        'per_house',
        'per_street',
        'per_subdivision',
        'per_barangay',
        'per_municipality',
        'per_province',
        'per_zipcode',
    ];
}
