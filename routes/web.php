<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\projController;
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
Route::get('/bitset_index','indexController@index' );
Route::get('/forall',[userController::class ,'alluserindex'])->middleware(['auth']);
Route::get('/onlyforadmin',[userController::class, 'admindex'])->middleware(['auth','admin']);
Route::get('/onlyforprogramer',[userController::class ,'allprogramerindex'])->middleware(['auth']);
Route::get('/password',[userController::class, 'ChangePassword']);
//Route::post('/projact',[projController::class, 'ProjAction']);
Route::post('/passwordf',[userController::class, 'ChangePasswordF']);
Route::get('/article', function () {
    return view('user.article');
});
Route::get('/orgnalpage', function () {
    return view('user.orgnalpage');
});
Route::get('/about', function () {
    return view('user.about');
});

Route::get('/proj', function () {
    return view('user.proj');
});
Route::get('/a_user', function () {
    return view('admin.a_user');
});
Route::get('/barnameh', function () {
    return view('user.barnameh');
});
Route::get('/traning', function () {
    return view('user.traning');
});
Route::get('/quize', function () {
    
    return view('user.quize');
});
Route::post('/pcomment', function () {
    
    return view('user.pcomment');
});
Route::post('/tcomment', function () {
    
    return view('user.tcomment');
});
Route::post('/procomment', function () {
    
    return view('user.procomment');
});
Route::post('/trsapt', function () {
    
    return view('user.trsapt');
});
Route::get('/opanion', function () {
    
    return view('user.opanion');
});
Route::get('/celem', function () {
    
    return view('user.celem');
});
Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/c', function () {
    return view('user.c');
});
Route::get('/c++', function () {
    return view('user.c++');
});
Route::get('/python', function () {
    return view('user.python');
});
Route::get('/cphp', function () {
    return view('user.cphp');
});
Route::get('/pc++', function () {
    return view('user.pc++');
});
Route::get('/pphp', function () {
    return view('user.pphp');
});
Route::get('/trc', function () {
    return view('user.trc');
});
Route::get('/trc++', function () {
    return view('user.trc++');
});
Route::get('/trpython', function () {
    return view('user.trpython');
});
Route::get('/adminarticle', function () {
    return view('admin.adminarticle');
});
Route::post('/addarticle', function () {
    return view('admin.addarticle');
});
Route::post('/delarticle', function () {
    return view('admin.delarticle');
});
Route::post('/adminproject', function () {
    return view('admin.adminproject');
});
Route::get('/adminclass', function () {
    return view('admin.adminclass');
});
Route::post('/addclass', function () {
    return view('admin.addclass');
});
Route::post('/ostad', function () {
    return view('admin.ostad');
});
Route::post('/price', function () {
    return view('admin.price');
});
Route::post('/time', function () {
    return view('admin.time');
});
Route::post('/date', function () {
    return view('admin.date');
});
Route::post('/delclass', function () {
    return view('admin.delclass');
});
Route::post('/projact2', function () {
    return view('user.projact2');
});
Route::post('/javab', function () {
    return view('programer.javab');
});
Route::post('/adduser', function () {
    return view('admin.adduser');
});
require __DIR__.'/auth.php';
