<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable = [
        'product_attr_id', 'order_id',
        'qty', 'unit_price', 'real_price', 'total_price'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function productAttr()
    {
        return $this->belongsTo(ProductAttribute::class, 'product_attr_id');
    }
}
