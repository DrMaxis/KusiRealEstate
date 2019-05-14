<?php

namespace App\Models\Properties\Options\Market;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Options\Market\Traits\Method\MarketOptionMethod;
use App\Models\Properties\Options\Market\Traits\Relationship\MarketOptionRelationship;


/**
 * Class MarketOption
 */
class MarketOption extends Model
{
    use MarketOptionRelationship, Uuid, MarketOptionMethod;

    protected $table = 'market_options';

    protected $fillable = [
        'option',
        'slug',
    ];

    public $timestamps = true;
}
