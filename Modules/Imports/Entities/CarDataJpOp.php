<?php

namespace Modules\Imports\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarDataJpOp extends Model
{
    use HasFactory;

    // protected $fillable = ['*'];
    // public $timestamps = false;
    
    const CREATED_AT = null;
    protected $table = 'auct_lots_xml_jp_op';

}
