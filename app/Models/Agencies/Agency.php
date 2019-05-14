<?php

namespace App\Models\Agencies;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agencies\Traits\Method\AgencyMethod;
use App\Models\Agencies\Traits\Relationship\AgencyRelationship;


/**
 * Class Agency.
 */
class Agency extends Model
{
    use AgencyRelationship, Uuid, AgencyMethod;
       
    protected $table = 'agencies';

    protected $fillable = [
        'agency',
        'logo',
        'slug',
];


    public $timestamps = true;
}
