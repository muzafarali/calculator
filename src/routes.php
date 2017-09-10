<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 9/10/2017
 * Time: 10:53 AM
 */

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Laravue\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Laravue\Calculator\CalculatorController@subtract');
