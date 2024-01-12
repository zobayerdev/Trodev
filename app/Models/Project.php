<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'url',
        'mode',
        'type',
        'image',
        'created_at',
        'updated_at'
    ];
}
