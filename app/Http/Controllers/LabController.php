<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
 
    public function addition($val1,$val2){
        $res = $val1 + $val2;
    	return $res;
    }

    public function subtraction($val1,$val2){
        $res = $val1 - $val2;
    	return $res;
    }

    public function multiplication($val1,$val2){
        $res = $val1 * $val2;
    	return $res;
    }

    public function division($val1,$val2){
        $res = $val1 / $val2;
    	return $res;
    }
}