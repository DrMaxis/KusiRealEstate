<?php

namespace App\Models\Properties;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Traits\Method\PropertyMethod;
use App\Models\Properties\Traits\Relationship\PropertyRelationship;



/**
 * Class Agent.
 */
class Property extends Model
{
    use PropertyRelationship, Uuid, PropertyMethod;

    protected $table = 'properties';

    protected $fillable = [
        'head_description',
        'main_description',
        'utility_description',
        'accessibility_description',
        'slug',
        'meta_description',
        'mls_id',
        'home_size',
        'land_size',
        'asking_price',
        'rental_price',
        'buy_now_price',
        'price-details',
        'available_date',
        'address',
        'city',
        'state',
        'zip',
        'zone',
        'county',
        'country',
        'tenure',
        'minimum_lease',
        'number_of_cars',
        'garage_car_space',
        'garage_size',
        'bedrooms',
        'bathrooms',
        'beds',
        'year_built',
        'last_updated',
    ];


    public $timestamps = true;
}
