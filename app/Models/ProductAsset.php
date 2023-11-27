<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAsset extends Model
{
    use HasFactory;
    protected $table = 'products_assets';

    protected $fillable = [
        'product_id',
        'name',
        'url', 
        'type'
    ];
}

