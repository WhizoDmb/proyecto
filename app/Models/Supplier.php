<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Define los campos que se pueden asignar en masa
    protected $fillable = [
        'name',
        'contact_person',
        'phone',
        'email',
        'address',
    ];
}
