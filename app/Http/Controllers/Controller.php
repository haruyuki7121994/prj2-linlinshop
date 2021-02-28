<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function filterProdsByCategories($products, $categories, $limit = 6)
    {
        return $products->filter(function ($itm) use ($categories, $limit) {
            return in_array($itm->product->category->id, $categories);
        })->unique('product_id')->take($limit);
    }
}
