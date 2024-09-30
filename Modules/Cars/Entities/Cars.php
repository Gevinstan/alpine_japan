<?php

namespace Modules\Cars\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $table="blog";
    protected $fillable=[
        'id',
        'category',
        'image',
        'title',
        'make',
        'model',
        'color',
        'year_of_reg',
        'grade',
        'chassis',
        'serial',
        'yom',
        'kms',
        'hrs',
        'engine',
        'transmission',
        'fuel',
        'price',
        'price_ru',
        'price_jpy',
        'sell_points',
        'remarks',
        'is_active',
        'is_ru_market',
        'is_na_market',
        'sr',
        'aw',
        'pw',
        'ps',
        'ab',
        'engine_type',
        'int_col',
        'abs',
        'has_video',
        'inside',
        'outside',
      ];
}
