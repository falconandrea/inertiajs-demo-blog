<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $fillable = [
        'post_id',
        'name',
        'comment'
    ];

    public $casts = [
        'created_at' => 'datetime:d/m/Y H:i'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
