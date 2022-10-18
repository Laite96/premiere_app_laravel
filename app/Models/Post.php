<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\Comments;
use App\Models\Images;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    /* public function comments()
    {
    return $this->hasMany(Commentaires::class);
    }*/
    public function comments()
    {
        return $this->morphMany(Comments::class, 'commentable');
    }

    public function image()
    {
        return $this->hasOne(Images::class);
    }

    public function imageArtist()
    {
        return $this->hasOneThrough(Artist::class, Images::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
