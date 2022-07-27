<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glasse extends Model
{
    protected $fillable = [
        'price',
        'image',
        'type',
    ];
    use HasFactory;
    public function cart(){
        return $this->belongsTo(Cart::class);

    }
}
