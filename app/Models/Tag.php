<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'nom',
    ];
    protected $hidden = [
        'id',
    ];
    
    public function posts() : BelongToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
