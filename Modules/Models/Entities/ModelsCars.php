<?php

namespace Modules\Models\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsCars extends Model
{
    protected $fillable=[
      'image',
      'category',
      'model'
    ];
    use HasFactory;
}
