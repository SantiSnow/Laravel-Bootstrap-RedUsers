<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function compra(){
        return $this->hasMany(Compra::class);
    }

    use HasFactory;
}
