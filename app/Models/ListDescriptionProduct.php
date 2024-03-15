<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, $id)
 */
class ListDescriptionProduct extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','key_detail','value_detail'];
}
