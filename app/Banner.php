<?php

namespace App;

use App\Traits\ActiveTrait;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use ActiveTrait;

    const INACTIVE = 0;
    const ACTIVE = 1;

    protected $table = 'banners';
    protected $fillable = [
        'position', 'image_url', 'is_active'
    ];
}
