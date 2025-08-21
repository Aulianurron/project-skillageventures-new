<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Personnel extends Model
{
    protected $table = 'personnels';
    protected $fillable = ['name', 'position', 'biography', 'slug'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($personnel) {
            $personnel->slug = Str::slug($personnel->name);
        });

        static::updating(function ($personnel) {
            $personnel->slug = Str::slug($personnel->name);
        });
    }
}
