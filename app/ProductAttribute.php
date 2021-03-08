<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attributes';
    protected $fillable = [
        'product_id', 'color_id', 'size_id', 'promotion_id',
        'qty', 'price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'promotion_id');
    }

    public function images()
    {
        return $this->hasOne(Image::class, 'product_attr_id');
    }

    public function hasPromotion()
    {
        $now = now()->toDateString();
        if (is_null($this->promotion_id)) return false;
        $promotion = $this->promotion;
        return $promotion->is_active == Promotion::ACTIVE && $promotion->from_date <= $now && $promotion->end_date >= $now;
    }

    public function getPromotionPrice()
    {
        return $this->hasPromotion() ? ($this->price) - ($this->price * $this->promotion->percentage / 100) : null;
    }
}
