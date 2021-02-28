<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'product_attr_id', 'url'
    ];

    public function getUrlAttribute($value)
    {
        return env('APP_URL') . $value;
    }
}
