<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyDetail;

class MainController extends Controller
{
    //
    public function mainPage(){
        $companies = CompanyDetail::limit(10)->get();
        //dd($companies);
        return view('frontend.main',['companies'=>$companies]);
    }

}
