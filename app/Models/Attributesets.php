<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attributesets extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    function arrtibutevalue(){
        return $this->hasMany(Attributevalue::class, 'attributes_id', 'id');
    }
}
