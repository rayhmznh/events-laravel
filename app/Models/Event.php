<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'organizer',
        'title',
        'category',
        'faculty',
        'date_and_time',
        'location',
        'registration_link',
        'description',
        'poster',
        'status',
        'view',
        'id_user'
    ];

    protected $hidden = [

    ];
}
