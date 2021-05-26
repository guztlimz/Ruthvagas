<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{

    use HasFactory;
    protected $fillable = ['nome', 'idade', 'email', 'telefone', 'pais', 'estado', 'cidade', 'carreira', 'estudos', 'voluntariado_intercambio', 'linguas_portugues', 'linguas_ingles', 'linguas_espanhol','linguas_chines', 'linguas_frances', 'linguas_alemao', 'linguas_japones'];
    
    // protected $hidden = [];

    protected $dates = ['deleted_at'];
}
