<?php

namespace App\Models\Properties\Accessibilities;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Accessibilities\Traits\Method\AccessibilityMethod;
use App\Models\Properties\Accessibilities\Traits\Relationship\AccessibilityRelationship;


/**
 * Class Agency.
 */
class Accessibility extends Model
{
    use AccessibilityRelationship, Uuid, AccessibilityMethod;

    protected $table = 'accessibilities';

    protected $fillable = [
        'accessibility',
        'slug',
    ];

    public $timestamps = true;
}
