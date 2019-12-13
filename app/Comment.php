<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\usuario;
use App\Product;

class Comment extends Model
{
    protected $guarded = [];

    public function users(){
        return $this->BelongsTo(usuario::class);
    }

    public function products(){
        return $this->BelongsTo(Product::class);
    }
}
