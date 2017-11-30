<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
     * Fields that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['message'];    


    // Let's set up our 1 to many relation from
    // a message to a user.
    public function user() {
        return $this->belongsTo(User::class);
    }

}
