<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    protected $fillable = ['nom', 'prenom', 'adresse', 'email', 'photo', 'tel', 'etat', 'vehicule'];
    use HasFactory;
}
