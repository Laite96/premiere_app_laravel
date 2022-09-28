<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    //protected $fillable = ['content_comment']; pour filtrer un champs specifique

    protected $guarded = []; //Pour laisser tout passer le champs libre

    public function commentable()
    {
        return $this->morphTo();
    }
}
