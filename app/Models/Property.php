<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'type', 'address1', 'address2', 'bedrooms', 'bathrooms', 'parking',
        'property_type_id', 'property_service_id'
    ];

}
