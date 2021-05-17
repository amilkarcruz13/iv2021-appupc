<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $table = "cliente";
    protected $fillable = ['id','persona_id','razon_social','nit','estado','created_at','updated_at'];

    public function persona(){
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
}
