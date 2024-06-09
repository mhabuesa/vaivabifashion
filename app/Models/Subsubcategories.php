<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subsubcategories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'subsubcategory_name',
        'slug',
        'subcategory_name',
        'product_count',
    ];

}
