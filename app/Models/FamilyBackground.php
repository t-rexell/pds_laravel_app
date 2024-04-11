<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class FamilyBackground extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table="family_background";
    protected $fillable = [
        'profile_information_id',
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_last_name',
        'spouse_name_extension',
        'occupation',
        'employer',
        'business_address',
        'telephone',
        'father_first_name',
        'father_middle_name',
        'father_last_name',
        'father_name_extension',
        'mother_first_name',
        'mother_middle_name',
        'mother_last_name',
        'maiden_name',

    ];
}
