<?php

namespace App\Models\Properties\Types\Listing;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Types\Listing\Traits\Method\ListingTypeMethod;
use App\Models\Properties\Types\Listing\Traits\Relationship\ListingTypeRelationship;



/**
 * Class ListingType
 */
class ListingType extends Model
{
    use ListingTypeRelationship, Uuid, ListingTypeMethod;

    protected $table = 'listing_types';

    protected $fillable = [
        'type',
        'slug',
    ];

    public $timestamps = true;
}
