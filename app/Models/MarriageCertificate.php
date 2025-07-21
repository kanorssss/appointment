<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarriageCertificate extends Model
{
    //
    protected $fillable = [
        'certificate_type',
        'type_of_request',
        'number_of_copies',
        'husband_last_name',
        'husband_middle_name',
        'husband_first_name',
        'wife_last_name',
        'wife_middle_name',
        'wife_first_name',
        'country',
        'province',
        'city_or_municipality',
        'date_of_marriage',
        'purpose',
    ];
}