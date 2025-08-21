<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name',
        'image',
        'stock',
        'description',
        'status',
        'category_product_id',
        'slug',
        'capital_price', // Added
        'selling_price', // Added
        'tokopedia', // Added
        'shopee', // Added
    ];
    public function category_product()
    {
        return $this->belongsTo(related: CategoryProduct::class);
    }
    public function link_product()
    {
        return $this->hasMany(LinkProduct::class);
    }
    public function detail_orders()
    {
        return $this->hasMany(DetailOrder::class, 'product_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($products) {
            $products->slug = Str::slug($products->product_name);
        });

        static::updating(function ($products) {
            $products->slug = Str::slug($products->product_name);
        });
    }
}
