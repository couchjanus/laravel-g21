<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description'];
    protected $dates = ['deleted_at',];

    public function getNameAttribute($value){
        return ucfirst($value);
    }

    // public function setNameAttribute($value){
    //     $this->attribute['name'] = strtolower($value);
    // }

    public static function search($search){
        return empty($search) ? static::query()
        : static::where('id', 'like', '%'.$search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    
}
