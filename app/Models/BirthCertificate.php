<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BirthCertificate extends Model
{
    //
    protected $fillable = [
        'certificate_type',
        'type_of_request',
        'number_of_copies',
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'sex',
        'country',
        'province',
        'city_or_municipality',
        'fathers_last_name',
        'fathers_first_name',
        'fathers_middle_name',
        'mothers_last_name',
        'mothers_first_name',
        'mothers_middle_name',
        'relationship_to_the_owner'
    ];
}
