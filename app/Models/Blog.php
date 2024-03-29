<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'write',
        'writer_image',
        'post',
        'writer_desccription',
        'created_at',
        'updated_at'
    ];
}
