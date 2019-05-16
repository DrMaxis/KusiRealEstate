<?php

namespace App\Models\Properties\Status\Market;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Status\Market\Traits\Method\MarketStatusMethod;
use App\Models\Properties\Status\Market\Traits\Relationship\MarketStatusRelationship;


/**
 * Class MarketStatus
 */
class MarketStatus extends Model
{
    use MarketStatusRelationship, Uuid, MarketStatusMethod;

    protected $table = 'market_status';

    protected $fillable = [
        'status',
        'slug',
    ];

    public $timestamps = true;
}
