<?php

namespace App\Models;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements ShouldQueue
{
    use HasFactory;

    protected $fillable = [
        'title', 'content'
    ];
}
