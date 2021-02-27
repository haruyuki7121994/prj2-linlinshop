<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use ActiveTrait;
    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'provinces';
    protected $fillable = [
        'slug', 'name', 'is_active', 'type'
    ];
   
    public function productAttrs()
    {
        return $this->hasMany(Order::class, 'province_id');
    }
    
  
}
