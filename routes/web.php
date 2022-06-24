<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('/demo-2',function(){    /*urlname*/
// 	return view('demo');            /*file name*/
// });


// Route::get('/demo', function () {
//     return view('demo');
// });

// route::get('/test',function(){
// 	echo"hello";
// });

// Route::get('/demo/{name}', function ($name) {
// echo $name;
// });

// Route::get('/demo2/{name}/{id}', function ($name,$id=null) {
// echo $name;
// echo $id;
// });

// Route::get('/demo3/{name}/{id?}', function ($name,$id=null) {   /*? shows this  
                                                                  /*variable is optional*/
// $data= compact('name','id');
// return view('demo')->with($data);
// });



Route::get('/abcd/{name?}', function ($name=null) {
 $abc="siddhi";
 return view('home',compact('name','abc'));
 });