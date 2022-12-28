<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'product_category';

    protected $fillable = [
        'product_id',
        'category_id'
    ];

    /**
     * Get the categories associated with the ProductCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categories(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * Get the products associated with the ProductCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function products(): HasOne
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
