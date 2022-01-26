<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    public function annonces(){
        return $this->hasMany(Annonce::class);
    } 
    public function user(){
        return $this->belongsTo(User::class);
   }
}
