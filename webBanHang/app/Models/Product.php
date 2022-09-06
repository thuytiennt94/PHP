<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id', 'id');
    }

    public function productCategory(){
        return $this->belongsTo(ProductImage::class,'product_id', 'id');
    }

    public function productImages(){
        return $this->hasMany(Product::class,'product_category_id', 'id');
    }
}
