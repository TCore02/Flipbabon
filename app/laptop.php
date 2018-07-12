<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class laptop extends Model
{
    
    public function setBrandAttribute($value)
    {
        return $this->attributes['brand'] = ucfirst($value);
    }
    public function setModelAttribute($value)
    {
        return $this->attributes['model'] = ucfirst($value);
    }
}

