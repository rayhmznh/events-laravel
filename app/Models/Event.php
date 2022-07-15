<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
//     protected $fillable = [
//         'organizer',
//         'title',
//         'category',
//         'faculty',
//         'date_and_time',
    

    protected $fillable = [
        'organizer', 
        'title',
        'location',
        'registration_link',
        'description',
        // 'poster'
    ];

    protected $hidden = [

    ];
}
        
   