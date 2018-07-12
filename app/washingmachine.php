<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class washingmachine extends Model
{
    protected $fillable = [
        'washingmachine_pic', 'category', 'sub_category', 'brand', 'model', 'price', 'specification',
    ];
}
