<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class cctv extends Model
{
    protected $fillable = [
        'cctv_pic', 'category', 'sub_category', 'brand', 'model', 'price', 'specification',
    ];
}
