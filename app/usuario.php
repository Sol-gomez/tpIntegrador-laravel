<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\usuario;

class usuario extends Model
{
    public $table = "usuarios";
    public $id = "id";
    public $timeStamps = true;
    public $guarded = [];
}
