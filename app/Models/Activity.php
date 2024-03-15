<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 */
class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','key_active','value_active','name_active','created_at'];
}
