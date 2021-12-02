<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'description'
    ];

    public $appends = ['format_date', 'intro'];

    public function getFormatDateAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
    public function getIntroAttribute()
    {
        return Str::limit($this->description, 100, '...');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
    }
}
