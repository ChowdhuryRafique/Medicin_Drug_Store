<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
public function cart(){
    return $this->hasOne("App\medicinCreate","id","medicine_id");
  }
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
