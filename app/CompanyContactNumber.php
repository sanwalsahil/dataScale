<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyContactNumber extends Model
{
    //
    public function companyDetail(){
        $this->belongsTo('App\CompanyDetail','company_id','id');
    }
}
