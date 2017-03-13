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
    return view('');
});

Route::get('api/rfid', function (Request $request) {
    if (!empty($request->rfid)) {
        $userData = User::where("rfid",$request->rfid)->first();
        if (!empty($userData)) {
            if ($userData->toggle) {
                $userData->toggle = false;
            } else {
                $userData->toggle = true;
            }
            $userData->save();
            return "SUCCESS!!";
        } else {
            return "[RFID] not found ";
        }
    }
    else{
        return "nothing [RFID] (?rfid=00000000)";
    }
});
