<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'glasse_id',

    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function glasses(){
        return $this->hasMany(Glasse::class);
    }
}
