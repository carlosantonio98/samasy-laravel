<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'type_id', 'flavor_id'];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function flavor() {
        return $this->belongsTo(Flavor::class);
    }

    public function sales() {
        return $this->hasMany(Sale::class);
    }

}
