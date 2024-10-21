<?php

namespace Modules\SmallHeavy\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallHeavy extends Model
{
    use HasFactory;
    protected $table="small_heavy";
    protected $fillable=[
        'id',
        'category',
        'image',
        'title',
        'make',
        'model',
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
        'dimensions',
        'price',
        'price_ru',
        'price_jpy',
        'sell_points',
        'remarks',
        'is_active',
        'is_ru_market',
        'is_na_market',
        'hooks',
        'boom',
        'jib',
        'outrigger',
        'commision_value',
        'new_arrival'
      ];
}
