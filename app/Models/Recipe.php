<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
   
    protected $primaryKey = 'id';
    use HasFactory;
    protected $fillable = [

        'name',
        'cat_id',
        'desc',
        'url'
    ];
}
