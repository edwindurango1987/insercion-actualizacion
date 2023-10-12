<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class student extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_personal_date';

    protected $fillable =[
        'document_number',
        'name',
        'sex',
        'marital_status',
        'date_of_birth',
        'residence_address',
        'stratum',
        'residence_type',
        'height',
        'institutional_email',
        'cell_phone_number'
    ];
}
