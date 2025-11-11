<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "sub_categories";

    protected $fillable = [
        "category_id",
        "name"
    ];

    public function category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
        // return $this->belongsTo(Category::class);
    }
}
