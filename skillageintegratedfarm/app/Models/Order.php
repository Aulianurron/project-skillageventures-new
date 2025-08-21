<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'payment_method_id',
        'category_order',
        'status',
        'total',
        'description',
    ];
    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
    public function detail_orders()
    {
        return $this->hasMany(DetailOrder::class);
    }
}
