<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNode extends Model
{
    protected $table = 'user_node';

    protected $guarded =['id'];

    public function ipAddress()
    {
        return $this->hasMany('App\IpAddress', 'usernode_id', 'id');
    }

    public function sockets()
    {
        return $this->hasMany('App\Socket', 'node_id', 'id');
    }
}
