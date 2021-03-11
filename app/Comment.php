<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'comments';
    protected $fillable = [
        'product_id', 'user_id', 'star', 'description'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
