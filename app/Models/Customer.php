<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Definir los campos que se pueden llenar mediante asignación masiva
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}
