<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSoftwarePricing extends Model
{
    use HasFactory;

    protected $fillable=[
        'type',
        'Service',
        'Validity',
        'Updateable',
        'Protection',
        'Revision',
        'Administration_Setup',
        'Responsive_UI_UX',
        'A_B_Testing',
        'Training_Test',
        'Project_Manager',
        'Website_Integration',
        'Platform_Support',
        'Maintenance_Charge',
        'Monthly_Packages',
        'Storage_Charge',
        'Offer_Percentage',
    ];
}
