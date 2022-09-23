<?php

namespace App\Models;

use App\Models\Commentaires;
use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    public function comments()
    {
        return $this->hasMany(Commentaires::class);
    }
    public function image()
    {
        return $this->hasOne(Images::class);
    }
}
