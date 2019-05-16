<?php

namespace App\Models\Properties\Status\Sale;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Status\Sale\Traits\Method\SaleStatusMethod;
use App\Models\Properties\Status\Sale\Traits\Relationship\SaleStatusRelationship;


/**
 * Class SaleStatus
 */
class SaleStatus extends Model
{
    use SaleStatusRelationship, Uuid, SaleStatusMethod;

    protected $table = 'sale_status';

    protected $fillable = [
        'status',
        'slug',
    ];

    public $timestamps = true;
}
