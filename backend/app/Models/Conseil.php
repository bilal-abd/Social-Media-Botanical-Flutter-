<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conseil extends Model
{
    use HasFactory;
    protected $table = 'conseil';
    protected $fillable = [
        'plante_id',
        'id_user',
        'titre',
        'description',
        'image',
    ];
}