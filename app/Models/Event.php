<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $with = ['faculty'];
    // protected $casts = [
    //   'start_event',
    //   'time_event' => 'datetime'
    // 'created_at'=>'datetime:d-m-Y'  
    // ];

    protected $fillable = [
        'organizer', 
        'title',
        'faculty_id',
        'category',
        'start_event',
        'time_event',
        'location',
        'registration_link',
        'description',
        'image'
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
    
}
        
   