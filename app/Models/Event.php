<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'start_date',
        'end_date',
        'start_time',
        'localisation',
        'image',
        'status',
        'formateur',
        'emploi',
        'societe_actuelle',
        'linked'
    ];
}
