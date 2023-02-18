<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prouduct;

class Category extends Model
{
    use HasFactory;
    // protected $fillable=['name'];
    //created_at update_at
    // public $timestamps=false;
    public function products(){
         return $this->hasMany(Prouduct::class);
    }
    public function getPaginatedProducts(){
        return $this->products()->paginate(7);
   }
}
