<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const IS_FEATURED = 1;
    const NOT_FEATURED = 0;

    protected $table = 'products';
    protected $fillable = [
        'slug', 'name', 'category_id', 'description', 'is_featured'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function productAttrs()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id');
    }

    public function scopeIsFeatured($query)
    {
        return $query->whereIsFeatured(self::IS_FEATURED);
    }

    public function gallery()
    {
        return $this->hasManyThrough(Image::class, ProductAttribute::class, 'product_id', 'product_attr_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id');
    }
}
