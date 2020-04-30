<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    //
    public function CompanyContactNumbers(){
        return $this->hasMany('App\CompanyContactNumber');
    }

    public function CompanyContactEmails(){
        return $this->hasMany('App\CompanyContactEmail');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function City(){
        return $this->belongsTo('App\City','city_id','id');

    }

    public function states(){

        return  $this->belongsTo('App\State','state_id','id');

    }


}
