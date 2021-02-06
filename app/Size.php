<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use ActiveTrait;
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'sizes';
    protected $fillable = [
        'name', 'is_active'
    ];

    public function productAttrs()
    {
        return $this->hasMany(ProductAttribute::class, 'size_id');
    }
}
