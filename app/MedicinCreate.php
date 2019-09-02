<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MedicinCreate extends Model
{
    use softDeletes;

    protected $fillable = [
        'medicinName', 'medicinQuantity', 'medicinPrice', 'medicinDescription', 'medicinSelect', 'diseaseName', 'imageupload',
    ];
    protected $dates=['deleted_at'];
}
