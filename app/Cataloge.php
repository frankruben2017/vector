<?php

namespace Vector;

use Illuminate\Database\Eloquent\Model;

class Cataloge extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_code', 'product_name', 'description', 'created_by','monto','plazo_to_pay',
    ];

      public function solicitud(){
       return $this->belongsToMany('Vector\Solicitud', 'cataloge_solicitud');
   } 

}
