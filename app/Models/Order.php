<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prouduct;

class Order extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsto(User::class);
    }
    public function products(){
        return $this->belongsToMany(Prouduct::class);
    }
}

//orders   prouducts
//order_proudct    order_id  product_id
