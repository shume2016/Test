<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Staff;
use App\Photo;
use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create',function (){

    $staff=Staff::find(1);
    $staff->photos()->create(['path'=>'example.jpg']);

});