<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','img','description','price','quantity','category_id'];

    // protected $fillable = ['name','description'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function order_items(){
        return $this->hasMany(orderItem::class);
    }
}
