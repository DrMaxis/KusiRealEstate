<?php

namespace App\Models\Properties\Options\Commercial;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Options\Commercial\Traits\Method\CommercialOptionMethod;
use App\Models\Properties\Options\Commercial\Traits\Relationship\CommercialOptionRelationship;


/**
 * Class CommercialOption
 */
class CommercialOption extends Model
{
    use CommercialOptionRelationship, Uuid, CommercialOptionMethod;

    protected $table = 'commercial_options';

    protected $fillable = [
        'option',
        'slug',
    ];

    public $timestamps = true;
}
