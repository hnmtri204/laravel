<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['code','status','user_id'];

    public function order_items(){
        return $this->hasMany(orderItem::class);
    }

    public function users(){
        return $this->belongsTo(user::class);
    }
}
