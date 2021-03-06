<?php
use App\User;
use App\Post;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create',function (){

$user=User::findOrFail(1);
    $post=new Post(['title'=>'my first post wiith onetomany', 'body'=>'lovely app']);

    $user->posts()->save($post);


});

//one to many relation
Route::get('/read',function (){

   $user= User::find(1);

    //dd($user->posts);

    foreach ($user->posts as $post){

        echo $post->title."<br/>";


    }


});



Route::get('/update',function (){
   $user= User::find(1);
    $user->posts()->whereId(2)->update(['title'=>'yes!how are laravel hey','body'=>'yes what opps hey  really fine the body of the laravel']);



});

Route::get('/delete',function (){


    $user=User::findOrFail(1);
    $user->posts()->whereId(2)->delete();
    return "gone";
});
