<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the Blog
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the comments for the Blog
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
