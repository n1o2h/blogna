<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'contenu',
        'image',
        'categorie_id',
    ];
    protected $hidden = [
        'id',
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
