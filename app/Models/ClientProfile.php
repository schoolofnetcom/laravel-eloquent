<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model
{
    protected $fillable = ['field', 'client_id'];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
