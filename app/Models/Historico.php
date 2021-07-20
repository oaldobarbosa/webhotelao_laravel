<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    protected $table = 'historico_hospedagens';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $casts = [
        'servicos' => 'array'
    ];
    
    
    protected $guarded = [];
}
