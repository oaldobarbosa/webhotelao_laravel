<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedagem extends Model
{
    use HasFactory;

    protected $table = 'hospedagens';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $data_hospedagem = 'Y-m-d';

    protected $casts = [
        'servicos' => 'array'
    ];
    
    protected $guarded = [];

}
