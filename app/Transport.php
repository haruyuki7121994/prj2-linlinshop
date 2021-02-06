<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transports';
    protected $fillable = [
        'province_id', 'price'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
