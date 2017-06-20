<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
       
    protected $table= "property";

    protected $fillable = [
        'title', 'description', 'state_id', 'town', 'country', 'address',
    ];
}
