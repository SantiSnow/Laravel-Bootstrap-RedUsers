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
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
