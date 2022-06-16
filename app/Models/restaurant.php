<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $table = "restaurants";
    protected $fillable = ['Nom', 'Prénom',  'Tel'];
    // protected $hidden = ['Adresse', 'email', 'photo', 'Registre commerce', 'Type restaurant'];
    use HasFactory;
}
