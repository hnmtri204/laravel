<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','description'];

    public function products(){
        //select * from products where category_id=id
        return $this->hasMany(Product::class);
    }
}
