<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'contenu',
        'image',
    ];
    protected $hidden = [
        'id',
        'categorie_id',
    ];
    public function categories() : BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
