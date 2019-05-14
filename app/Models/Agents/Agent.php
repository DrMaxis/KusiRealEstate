<?php

namespace App\Models\Agents;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agents\Traits\Method\AgentMethod;
use App\Models\Agents\Traits\Relationship\AgentRelationship;


/**
 * Class Agent.
 */
class Agent extends Model
{
    use AgentRelationship, Uuid, AgentMethod;
       
    protected $table = 'agents';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'city',
        'state',
        'zip',
        'phone',
        'fax',
        'email',
        'about_me',
        'last_updated',
];


    public $timestamps = true;
}
