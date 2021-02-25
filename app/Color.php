<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use ActiveTrait;
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'colors';
    protected $fillable = [
        'code', 'name', 'is_active'
    ];

 
    public function productAttrs()
    {
        return $this->hasMany(ProductAttribute::class, 'color_id');
    }
    
    
}
