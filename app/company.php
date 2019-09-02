<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class company extends Model
{
    use softDeletes;
    protected $fillable = [
        'companyName',
    ];
    protected $dates=['deleted_at'];
}