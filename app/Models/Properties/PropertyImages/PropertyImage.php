<?php

namespace App\Models\Properties\PropertyImages;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\PropertyImages\Traits\Method\PropertyImageMethod;
use App\Models\Properties\PropertyImages\Traits\Relationship\PropertyImageRelationship;


/**
 * Class PropertyImage
 */
class PropertyImage extends Model
{
    use PropertyImageRelationship, Uuid, PropertyImageMethod;

    protected $table = 'property_images';

    protected $fillable = [
        'property_id',
        'image',
        'caption',
        'description',
        'water_marked_image',
    ];

    public $timestamps = true;
}
