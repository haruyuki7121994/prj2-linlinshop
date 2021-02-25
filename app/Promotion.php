<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';
    protected $fillable = [
        'name', 'from_date', 'end_date', 'is_active',
        'note', 'image_url', 'percentage'
    ];

    public function productAttr()
    {
        return $this->belongsTo(ProductAttribute::class, 'promotion_id');
    }
}
