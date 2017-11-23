<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoccerTeam extends Model
{
    protected $fillable = [
        'name'
    ];

    //many-to-one
    //one-to-many

    public function clients(){
        return $this->hasMany(Client::class);
    }

}
