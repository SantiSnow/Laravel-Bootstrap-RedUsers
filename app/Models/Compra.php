<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{

    protected $fillable = [
        'cantidad',
        'precio',
        'user_id',
        'proveedor_id',
        'fecha_compra',
    ];

    use HasFactory;

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
