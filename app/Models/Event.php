<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'location',
        'time',
        'eventName',
        'eventCost',
    ];
    use HasFactory;
}
