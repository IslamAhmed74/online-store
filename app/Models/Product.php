<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    protected $table = 'products';
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_items');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'cart_items');
    }
}

