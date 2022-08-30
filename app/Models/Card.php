<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
       'users_id', 'products_id'
    ];

    public function product()
    {
        //relasi one to one 
        return $this->hasOne(Product::class, 'id', 'product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
