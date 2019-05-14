<?php

namespace App\Models\Properties\Tenures;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properties\Tenures\Traits\Method\TenureMethod;
use App\Models\Properties\Tenures\Traits\Relationship\TenureRelationship;


/**
 * Class Tenure 
 */
class Tenure extends Model
{
    use TenureRelationship, Uuid, TenureMethod;

    protected $table = 'tenures';

    protected $fillable = [
        'tenure',
        'slug',
    ];

    public $timestamps = true;
}
