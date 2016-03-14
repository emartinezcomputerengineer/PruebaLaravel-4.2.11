<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('products/login');
});

Route::get('salir', function()
{
    Auth::logout();
    return View::make('products/login');
});

Route::controller('check','Login');

Route::get('registrar',function(){
   $user = new User;
   $user->name = "Edgar";
   $user->email = "emartinez@gmail.com";
   $user->password = Hash::make('123');
   $user->save();
   
   return "El usuario fue agregado";
});
Route::get('products/list', array('uses' => 'ProductsController@listProduct'));
Route::get('products/new', array('uses' => 'ProductsController@newProduct'));
Route::post('products/create', array('uses' => 'ProductsController@createProduct'));
Route::get('products/{id}', array('uses'=>'ProductsController@seeProduct'));
Route::post('products/update/{id}', array('uses' => 'ProductsController@updateProduct'));
Route::post('products/delete/{id}', array('uses' => 'ProductsController@deleteProduct'));




 
