<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostArticle extends Model
{
    protected $fillable = ['id', 'created_at'];
    use HasFactory;
}
