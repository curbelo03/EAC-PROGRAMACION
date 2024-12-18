<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cafe extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = 'cafes';
    protected $fillable = ['Titulo', 'Autor', 'Contenido'];
}
