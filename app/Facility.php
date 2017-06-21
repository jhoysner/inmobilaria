<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model

{
    protected $table = "facilities";
    protected $fillable = [
        'name', 'id',
    ];


    public function Properies(){
        return $this->belongsToMany('App\Property');
    }
}
