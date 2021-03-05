<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //define status
    const PENDING = 0;
    const APPROVE = 1;
    const PAID = 2;
    const FAIL = 3;

    //define payment method
    const COD = 0;
    const TRANSFER = 1;

    const LIST_STATUS = ['Pending', 'Approve', 'Paid', 'Fail'];
    const LIST_METHOD = ['COD', 'TRANSFER'];

    protected $table = 'orders';
    protected $fillable = [
        'code', 'user_id', 'province_id',
        'shipping_full_name', 'shipping_mobile', 'house_number_street',
        'payment_method', 'status',
        'sub_total', 'shipping_fee', 'vat', 'total'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
