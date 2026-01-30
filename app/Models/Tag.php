<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    protected $hidden = [
        'id',
    ];

    public function post() : BelongToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
