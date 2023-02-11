<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prouduct extends Model
{
    use HasFactory;
    protected $fillable=['product_name','price','quantity'];
    //created_at update_at
    public $timestamps=false;
}
