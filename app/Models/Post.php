<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'contenu',
        'image',
        'categorie_id',
    ];
//    protected $hidden = [
//        'id',
//    ];
    public function categorie() : BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function tag() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
