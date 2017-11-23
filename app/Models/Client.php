<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const TYPE_INDIVIDUAL = 'individual';
    const TYPE_LEGAL = 'legal';

    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    protected $fillable = [
        'name',
        'document_number',
        'email',
        'phone',
        'defaulter',
        'date_birth',
        'sex',
        'marital_status',
        'physical_disability',
        'company_name',
        'client_type',
        'soccer_team_id'
    ];

    /*public function time(){ //many-to-one
        return $this->belongsTo(SoccerTeam::class,'soccer_team_id');
    }*/

    public function soccerTeam(){ //many-to-one
        return $this->belongsTo(SoccerTeam::class);
    }

    public function clientProfile(){
        return $this->hasOne(ClientProfile::class);
    }
}
