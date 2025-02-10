<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\Members;

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
    return view('index');
})->name('index');
Route::get('/register', [RegisterController::class,'create'])->name('member.register');
Route::get('/view', [RegisterController::class,'show'])->name('member.view');
Route::get('/edit/{id}', [RegisterController::class,'edit'])->name('member.edit');
Route::get('/status/{id}', [RegisterController::class,'status'])->name('member.status');
Route::post('/update/{id}', [RegisterController::class,'update'])->name('member.update');
Route::get('/delete/{id}', [RegisterController::class,'destroy'])->name('member.delete');
Route::post('/register', [RegisterController::class,'store'])->name('member.save');

Route::get('/member', function(){
    $members = Members::all();
    echo "<pre>";
    print_r($members);
});
