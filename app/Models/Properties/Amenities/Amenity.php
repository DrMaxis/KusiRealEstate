<?php

namespace App\Models\Properties\Amenities;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Amenities\Traits\Method\AmenityMethod;
use App\Models\Properties\Amenities\Traits\Relationship\AmenityRelationship;


/**
 * Class Amenity.
 */
class Amenity extends Model
{
    use AmenityRelationship, Uuid, AmenityMethod;

    protected $table = 'amenities';

    protected $fillable = [
        'amenity',
        'slug',
    ];

    public $timestamps = true;
}
