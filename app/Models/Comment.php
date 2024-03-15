<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','product_id','comment','status','prior','comment_parent'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function comment_product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
