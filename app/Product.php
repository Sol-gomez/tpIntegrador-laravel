<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\usuario;
use App\Exchange;
use App\Comment;

class Product extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
      }
      public function photos(){
        return $this->hasMany('App\ImagesProducts', 'product_id');
      }

   /* public function users(){
        return $this->belongsTo(usuario::class);
    }

    public function categories(){
        return $this->hasOne(Category::class);
    }

    public function changes(){
        return $this->BelongsTo(Exchange::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    } */
}
