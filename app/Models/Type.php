<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    public function product() {
        return $this->hasOne(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
