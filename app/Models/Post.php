<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Fields that can't be mass assigned
    // protected $guarded = [];

    // Fileds that can be mass assigned
    // protected $fillable = ['title', 'excerpt', 'body'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

}
