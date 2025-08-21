<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'description' , 'category_program_id' , 'status' , 'document_program' , 'slug'];

    public function category_program()
    {
        return $this->belongsTo(related: CategoryProgram::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
