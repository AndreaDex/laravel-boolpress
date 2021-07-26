<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['title', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
