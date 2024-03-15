<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static findOrFail(String $id)
 */
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','status','prior','price','sale','image','description','category_id','quantity'];

    /**
     * @return BelongsTo
     */
    public function cate(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function cates(){
        return $this->hasMany(CategoriesProducts::class,'product_id');
    }
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'categories_products','product_id','category_id');
    }
    public function images(): HasMany
    {
        return $this->hasMany(ImageDetailProduct::class);
    }
    public function details(): HasMany
    {
        return $this->hasMany(ListDescriptionProduct::class);
    }
    public static function recursive($categories, $parents = 0, $level = 1 , &$listCategory): void
    {
        if(count($categories) > 0){
            foreach ($categories as $key => $value) {
                if($value->parent_cate == $parents){
                    $value->level = $level;
                    $listCategory[] = $value;
                    unset($categories[$key]);

                    $parent = $value->id;

                    self::recursive($categories, $parent, $level + 1 , $listCategory);
                }
            }
        }
    }
}
