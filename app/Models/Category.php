<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 * @method static orderBy(string $string, string $string1)
 * @method static withCount(string $string)
 */
class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','description','parent_cate','status','prior'];

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
    public static function in_array($id, &$listParentCate): bool
    {
        $kq = False;
        foreach ($listParentCate as $key => $value) {
            if($value->id == $id){
                $kq = True;
            }
        }
        return $kq;
    }
    public static function findPathToRoot($variable , $id, &$path = []) {
        if ($id == 0) {
            return $path;
        }
        foreach ($variable as $key => $value) {
            if ($value->id == $id) {
                array_unshift($path, $value);
                self::findPathToRoot($variable,$value->parent_cate, $path);
            }
        }
    }
    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'categories_products');
    }
}
