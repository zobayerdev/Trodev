<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'projectid',
        'projecttypes',
        'packagestype',
        'validity',
        'monthlycharge',
        'softwareprice',
        'ssl',
        'training',
        'revision',
        'domain',
        'storage',
    ];
}
