<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/rfid', function (Request $rfid) {
    $userData = User::where($rfid)->get();
    if (!empty($userData)) {
        if($userData->toggle){
            $userData->toggle = false;
        }
        else{
            $userData->toggle = true;
        }
        $userData->save();
        return true;
    }
    else{
        return false;
    }
});
