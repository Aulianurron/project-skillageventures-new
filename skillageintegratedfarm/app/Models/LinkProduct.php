<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkProduct extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link_product',
        'marketplace_name',
        'product_id',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

   
}

