
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Exhange extends Model{
    protected $guarded = [];

    public function products(){
        return $this->BelongsTo(Product::class);
    }
}

?>