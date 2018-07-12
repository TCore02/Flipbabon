<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobile extends Model
{
    protected $fillable = [
        'mobile_pic', 'category', 'sub_category', 'brand', 'model', 'price', 'specification',
    ];
    public function setBrandAttribute($value)
    {
        return $this->attributes['brand'] = ucfirst($value);
    }
    public function setModelAttribute($value)
    {
        return $this->attributes['model'] = ucfirst($value);
    }
}
