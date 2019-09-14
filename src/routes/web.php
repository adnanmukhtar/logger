<?php
/**
 * Created by PhpStorm.
 * User: Adnan
 * Date: 14/09/2019
 * Time: 06:32 PM
 */
Route::group(['namespace'=>'Adnanmukhtar\Logger\Http\Controllers'],function (){
    Route::get('logger','LoggerController@index');
});
