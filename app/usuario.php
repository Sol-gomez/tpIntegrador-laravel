<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Comment;

class usuario extends Model
{
    protected $guarded = [];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
