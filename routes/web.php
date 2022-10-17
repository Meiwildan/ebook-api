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
    return view('welcome');
});

Route::get('coba', function () {
    return "haloo";
});

//array json
Route::get('coba1', function () {
    return ["mantap", "jiwa"];
});

Route::get('coba2', function () {
    return [
        "nama" => "Meiwildan Muhammad Farrel",
        "kelas" => "XII RPL 4",
        "NIS"   => 12344556,
    ];
});

Route::get('coba3', function(){
    return response()->json(
    [
        'Nama' =>'Meiwildan Muhammad Farrel',
        'Kelas' => 'XII RPL 4',
        'nis' => 3103120130
    ], 201
);
});