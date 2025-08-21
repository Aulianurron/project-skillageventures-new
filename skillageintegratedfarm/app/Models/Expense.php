<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'category_expenses_id',
        'description',
        'total',
    ];
    public function category_expense()
    {
        return $this->belongsTo(CategoryExpense::class, 'category_expenses_id');
    }
}
