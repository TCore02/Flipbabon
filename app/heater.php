<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class heater extends Model
{
    protected $fillable = [
        'heater_pic', 'category', 'sub_category', 'brand', 'model', 'price', 'specification',
    ];
}
