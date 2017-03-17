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

use App\Events\RfidPusher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(!Auth::check()){
        return redirect('/login');
    }

    return view('top');
});

Route::get('/result',function(){
    if(!Auth::check()){
        return redirect('/login');
    }
    $group = Auth::user()->groupID;
    $user = User::where('groupID',$group)->get();

    return view('result',compact('user'));
});


Route::get('/mypage',function(){
    if(!Auth::check()){
        return redirect('/login');
    }
    return view('mypage');
});


Route::get('/contact',function(){
    if(!Auth::check()){
        return redirect('/login');
    }
    return view('contact');
});


Route::get('/group',function(){
    if(!Auth::check()){
        return redirect('/login');
    }
    return view('group');
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

            $options = array(
                'encrypted' => true
            );
            $pusher = new Pusher(
                '1330b9288dddb81f7487',
                'c4b9163d30052544e4ee',
                '315652',
                $options
            );

            $data['name'] = $userData->name;
            $data['toggle'] = $userData->toggle;
            $data['id'] = $userData->id;
            $pusher->trigger('my-channel', 'my-event', $data);


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

