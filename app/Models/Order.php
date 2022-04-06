<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Order_detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails(){
        return $this->hasMany(Order_detail::class);
    }
}
