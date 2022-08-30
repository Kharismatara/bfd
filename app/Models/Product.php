<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'name', 'deskription', 'price', 'slug'
    ];

    public function galleries()
    {
        //untuk one to many 
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }
}