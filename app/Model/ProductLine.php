<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    protected $table ='product_lines';
    protected $fillable = ['name','textDescription','image'];
}
