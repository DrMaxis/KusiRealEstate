<?php

namespace App\Models\Properties\Options\Sale;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Options\Sale\Traits\Method\SaleOptionMethod;
use App\Models\Properties\Options\Sale\Traits\Relationship\SaleOptionRelationship;


/**
 * Class SaleOption
 */
class SaleOption extends Model
{
    use SaleOptionRelationship, Uuid, SaleOptionMethod;

    protected $table = 'sale_options';

    protected $fillable = [
        'option',
        'slug',
    ];

    public $timestamps = true;
}
