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

Route::get('/', function () {
    return view('mystore');
});

Route::view('/welcome','welcome');
Route::get('wfp/{kelas}',function($kelas){
   if($kelas == "c" || $kelas =="C"){
    return "WFP kelas saya"; 
   }
   else{
    return "itu bukan kelas WFP saya "; 
   }
    
});
Route::get('Kevin', function(){
    return "Hello WFP C";
});

Route::get('user/{id}',function($id){
    return "User".$id;
});

Route::get('greeting',function(){
    return view('welcome',['name'=>'Kevin']);
});
Route::get('catalog/',function(){
    return view('catalog'); 
})->name('catalog');
Route::get('catalog/medicines',function(){
    return  view('list',['name'=>'medicines']); 
})->name('medicines');
Route::get('catalog/med_equip',function(){
    return  view('list',['name'=>'med_equip']); 
})->name('med_equip');

Route::get('catalog/medicines/{id}',function($id){
    return view('detail',['detailid'=>$id]); 
})->name('detailmedicines');
Route::get('catalog/med_equip/{id}',function($id){
    return  view('detail',['detailid'=>$id]); 
})->name('detailequip');

