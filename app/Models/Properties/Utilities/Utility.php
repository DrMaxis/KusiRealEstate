<?php

namespace App\Models\Properties\Utilites;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Utilities\Traits\Method\UtilityMethod;
use App\Models\Properties\Utilities\Traits\Relationship\UtilityRelationship;


/**
 * Class Utility.
 */
class Utility extends Model
{
    use UtilityRelationship, Uuid, UtilityMethod;

    protected $table = 'utilities';

    protected $fillable = [
        'utility',
        'slug',
    ];

    public $timestamps = true;
}
