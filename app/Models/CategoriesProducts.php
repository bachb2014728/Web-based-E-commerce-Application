<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesProducts extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','category_id'];

    /**
     * @return BelongsTo
     */
    public function cateElement(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
