<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $guarded = [];
    
    public function products(){
        return $this->BelongsTo(Product::class);
    }
}
