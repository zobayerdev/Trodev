<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'ip_address',
            'visit_count',
            'city',
            'created_at',
            'updated_at'
        ];
}
