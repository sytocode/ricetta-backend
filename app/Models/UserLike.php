<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLike extends Model
{
    use HasFactory;
    protected $table = 'user_likes';
    protected $fillable = [
        'recipe_id', 'user_id'
    ];
}
