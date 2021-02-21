<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;
use Str;

class Category extends Model
{
    use ActiveTrait;
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'categories';
    protected $fillable = [
        'slug', 'name', 'is_active'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
