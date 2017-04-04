<?php

namespace Vector;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
  #  use Authenticatable, CanResetPassword, HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastnames', 'CIN', 'phone', 'email', 'city','user_id'
    ];
    
   public function cataloge(){
       return $this->belongsToMany('Vector\Cataloge', 'cataloge_solicitud');
   } 

}
