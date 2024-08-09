<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    // Define los campos que se pueden asignar en masa
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'category_id',
    ];

    // Define la relación con el modelo Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
