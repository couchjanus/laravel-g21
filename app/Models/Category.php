<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status'];
    public function products(){
        return $this->hasMany(Product::class);
    }

    public static function search($search){
        return empty($search) ? static::query()
        : static::where('id', 'like', '%'.$search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%');
    }
}
