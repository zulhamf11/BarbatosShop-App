<?php

namespace App\Models;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'image',
        'price',
        'detail',
    ];
    
    protected $table = 'products';

    public function productCategories(): HasMany
    {
        return $this->hasMany(ProductCategory::class, 'product_id', 'id');
    }
}
