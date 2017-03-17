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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(Auth::check()){
        return redirect('/login');
    }
    return view('top');
});

Route::get('/result',function(){
    return view('result');
});
Route::get('/mypage',function(){
    return view('result');
});
Route::get('/contact',function(){
    return view('result');
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

Auth::routes();

Route::get('/home', 'HomeController@index');
