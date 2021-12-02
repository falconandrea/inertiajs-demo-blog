<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'description'
    ];

    public $casts = [
        'created_at' => 'datetime:d/m/Y'
    ];
}
