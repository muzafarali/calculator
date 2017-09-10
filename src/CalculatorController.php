<?php

namespace Laravue\Calculator;

use Illuminate\Http\Request;
use LaraVueAdmin\Http\Requests;
use LaraVueAdmin\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //
    public function add($a, $b){
        echo $a + $b;
    }
    
    public function subtract($a, $b){
        echo $a - $b;
    }
}
