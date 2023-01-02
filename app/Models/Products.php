<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_name',
        'image',
        'price',
        'detail',
    ];
    
    protected $table = 'products';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function order_detail() {
        return $this->hasMany('App\Models\OrderDetail', 'product_id', 'id');
    }
}
