<?php
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{
    /**
     * Get the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}