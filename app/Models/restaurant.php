<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "restaurants";
    protected $fillable = ['Nom', 'prenom', 'tel', 'adresse', 'email', 'photo', 'registre_commerce', 'type_restaurant'];
    use HasFactory;
}
