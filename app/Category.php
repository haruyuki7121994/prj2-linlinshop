<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ActiveTrait;
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'categories';
    protected $fillable = [
        'slug', 'name', 'is_active'
    ];

    static $staticList = [
        'clothes' => [
            'ao' => [
                'id' => 6,
                'name' => 'Shirt'
            ],
            'dam' => [
                'id' => 7,
                'name' => 'Dress'
            ],
            'quan' => [
                'id' => 8,
                'name' => 'Trouser'
            ],
            'vay' => [
                'id' => 9,
                'name' => 'Skirt'
            ],
            'bo-do' => [
                'id' => 12,
                'name' => 'Set of clothes'
            ],
        ],
        'shoes' => [
            'giay' => [
                'id' => 1,
                'name' => 'Shoes'
            ],
            'dep' => [
                'id' => 2,
                'name' => 'Sandals'
            ],
        ],
        'handbags' => [
            'tui-xach' => [
                'id' => 10,
                'name' => 'Hand Bag'
            ],
            'vi' => [
                'id' => 11,
                'name' => 'Squeeze'
            ],
        ],
        'accessories' => [
            'dong-ho' => [
                'id' => 3,
                'name' => 'Watch'
            ],
            'mat-kinh' => [
                'id' => 4,
                'name' => 'Glass'
            ],
            'non' => [
                'id' => 5,
                'name' => 'Hat'
            ],
        ],
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function productAttrs()
    {
        return $this->hasManyThrough(ProductAttribute::class, Product::class);
    }
}
