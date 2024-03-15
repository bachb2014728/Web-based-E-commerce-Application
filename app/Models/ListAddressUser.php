<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListAddressUser extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','phone','address'];
}
