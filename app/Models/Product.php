<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Order_detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function orderDetails(){
        return $this->hasMany(Order_detail::class);
    }
}
