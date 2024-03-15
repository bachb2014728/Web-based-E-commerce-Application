<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, mixed $id)
 * @method static find(string $id)
 */
class ImageDetailProduct extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','image'];

}
