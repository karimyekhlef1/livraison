<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function plats(){
        return $this->belongsToMany(Plat::class, 'ligne_panier', 'panier_id', 'plat_id');
    }


}
