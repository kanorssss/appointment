<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeathCertificate extends Model
{
    //
    protected $fillable = [
        'certificate_type',
        'type_of_request',
        'number_of_copies',
        'deceased_last_name',
        'deceased_middle_name',
        'deceased_first_name',
        'country',
        'province',
        'city_or_municipality',
        'date_of_death',
        'sex',
        'fathers_last_name',
        'fathers_middle_name',
        'fathers_first_name',
        'mothers_last_name',
        'mothers_middle_name',
        'mothers_first_name',
        'purpose',
        'relationship_to_the_owner',
        'delivery_to'
    ];
}
