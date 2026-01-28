<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    protected $hidden = [
        'id',
    ];

    //get the post for the category
    public function posts(): HasMany
    {

        return $this->hasMany(Post::class);
    }
}
