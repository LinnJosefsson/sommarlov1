<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;


class Post extends Model implements Likeable
{
    use HasFactory;

    use Likes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
