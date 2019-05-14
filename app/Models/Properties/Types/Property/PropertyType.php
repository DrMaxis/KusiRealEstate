<?php

namespace App\Models\Properties\Types\Property;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Types\Property\Traits\Method\PropertyTypeMethod;
use App\Models\Properties\Types\Property\Traits\Relationship\PropertyTypeRelationship;


/**
 * Class PropertyType
 */
class PropertyType extends Model
{
    use PropertyTypeRelationship, Uuid, PropertyTypeMethod;

    protected $table = 'property_types';

    protected $fillable = [
        'type',
        'slug',
    ];

    public $timestamps = true;
}
