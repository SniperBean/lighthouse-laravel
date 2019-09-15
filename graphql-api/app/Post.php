<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    protected $fillable = [
        'user_id', 'title', 'content',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    
    public function author(): BelongsTo
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    protected $table = 'posts';
}
