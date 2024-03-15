<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 * @method static create(array $all)
 */
class ListAddressUser extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','phone','address'];
}
