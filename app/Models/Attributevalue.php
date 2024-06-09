<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributevalue extends Model
{
    use HasFactory;
    protected $guarded = [];
    function attributeset(){
        return $this->belongsTo(Attributesets::class, 'attributes_id');
    }
}
