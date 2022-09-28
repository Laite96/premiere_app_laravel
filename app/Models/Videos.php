<?php

namespace App\Models;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}
