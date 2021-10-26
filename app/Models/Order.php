<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Order extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public static function cart($product){
        $niz = [];
        array_push($niz ,$product);
        
        return;
    }
}
