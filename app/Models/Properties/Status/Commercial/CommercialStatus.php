<?php

namespace App\Models\Properties\Status\Commercial;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Status\Commercial\Traits\Method\CommercialStatusMethod;
use App\Models\Properties\Status\Commercial\Traits\Relationship\CommercialStatusRelationship;


/**
 * Class CommercialStatus
 */
class CommercialStatus extends Model
{
    use CommercialStatusRelationship, Uuid, CommercialStatusMethod;

    protected $table = 'commercial_status';

    protected $fillable = [
        'status',
        'slug',
    ];

    public $timestamps = true;
}
