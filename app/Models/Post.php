<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'description',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
