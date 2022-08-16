<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'observaciones', 'incidenceable_id', 'incidenceable_type', 'creado_por', 'actualizado_por'];

    public function incidenceable(){
        return $this->morphTo();
    }
}
