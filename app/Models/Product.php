<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        "category_id",
        "sub_category_id",
        "name",
        "product_image",
        "product_color",
        "description",
        "price",
        "status"
    ];
}
