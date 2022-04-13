<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['title','subtitle','price','description','dimension'];

    public function setDimensionAttribute($value)
    {
        $this->attributes['dimension'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getDimensionAttribute($value)
    {
        return json_decode($value);
    }
}
