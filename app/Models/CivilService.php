<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CivilService extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_service',
        'rating',
        'examination_date',
        'examination_place',
        'license_number',
        'license_validity_date',
    ];


    public function profileInformation(){

        return $this->belongsTo(ProfileInformation::class);
    }


}

