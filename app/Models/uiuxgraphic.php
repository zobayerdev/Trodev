<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uiuxgraphic extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'services',
        'licence',
        'file',
        'format',
        'mockup',
        'showcase',
        'price',
        'revision',
        'service',
        'landing',
    ];
}
