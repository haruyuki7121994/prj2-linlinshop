<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use ActiveTrait;
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'promotions';
    protected $fillable = [
        'name', 'from_date', 'end_date', 'is_active',
        'note', 'image_url', 'percentage'
    ];

    public function productAttr()
    {
        return $this->hasMany(ProductAttribute::class, 'promotion_id');
    }
}
