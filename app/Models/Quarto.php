<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    use HasFactory;

    protected $table = 'quartos';
    protected $primaryKey = 'numero_quarto';
    public $timestamps = true;

    protected $guarded = [];
}
