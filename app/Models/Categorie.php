<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom', 'description',
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
