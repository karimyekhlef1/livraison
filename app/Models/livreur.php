<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livreur extends Model
{
    protected $fillable = ['Nom', 'Prénom', 'Adresse', 'email', 'photo', 'Tel', 'etat', 'vehicule'];
    use HasFactory;
}
