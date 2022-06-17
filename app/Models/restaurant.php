<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "restaurants";
    protected $fillable = ['nom', 'prenom', 'tel', 'adresse', 'email', 'photo', 'registre_commerce', 'type_restaurant'];
    // protected $hidden = []
    use HasFactory;

    public function plats() {
        return $this->hasMany(Plat::class, 'restaurant_id', 'id');        
    }
}
