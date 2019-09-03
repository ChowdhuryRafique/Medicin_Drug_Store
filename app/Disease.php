<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disease extends Model
{
    use softDeletes;
    protected $fillable = [
        'disease_name',
    ];
    protected $dates=['deleted_at'];
}
