<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        
    ];

    public function category()
    {
        return $this->belongsTo(CategoryArticle::class, 'category_id');
    }
}
