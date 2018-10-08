<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNode extends Model
{
    protected $table = 'user_node';

    public function ipAddress()
    {
        return $this->hasMany('App\IpAddress', 'usernode_id', 'id');
    }
}
