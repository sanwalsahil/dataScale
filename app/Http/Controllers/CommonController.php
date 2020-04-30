<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class CommonController extends Controller
{
    //
    public function getCities($id){
        $states = State::findorfail($id);

        return $states->cities->toJson();
    }

}
