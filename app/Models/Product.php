<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'brand_id', 'status'];

    protected $dates = ['deleted_at',];


    public static function search($search){
        return empty($search) ? static::query()
        : static::where('id', 'like', '%'.$search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('price', 'like', '%'.$search.'%');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function pictures(){
        return $this->belongsToMany(Picture::class);
    }
}
