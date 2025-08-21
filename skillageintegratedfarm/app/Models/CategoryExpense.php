<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryExpense extends Model
{
    protected $fillable = ['name']; // Add 'name' to fillable property
    protected $table = 'category_expense'; // Specify the correct table name

    public function expense()
    {
        return $this->hasMany(Expense::class,'id');
    }
    
}
