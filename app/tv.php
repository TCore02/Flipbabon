<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class tv extends Model
{
    protected $fillable = [
        'tv_pic', 'category', 'sub_category', 'brand', 'model', 'price', 'specification',
    ];
}
