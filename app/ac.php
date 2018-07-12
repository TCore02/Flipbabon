<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ac extends Model
{
    protected $fillable = [
        'ac_pic', 'category', 'sub_category', 'brand', 'model', 'price', 'specification',
    ];
}
