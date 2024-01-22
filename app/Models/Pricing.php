<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'maintainance',
        'storage',
        'peroff',
        'development',
        'UI_UX',
        'logo',
        'business_card',
        'training_time',
        'revision',
        'project_manager',
        'edit_request',
        'technical',
        'development_request',
        'security',
        'hosting',
        'sqa',
    ];
}
