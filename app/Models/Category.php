<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
}
class Category extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
