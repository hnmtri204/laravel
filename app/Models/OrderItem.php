<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','order_id','quantity','price'];

    public function products(){
        return $this->belongsTo(product::class);
    }
    public function orders(){
        return $this->hasMany(order::class);
    }
}
