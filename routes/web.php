<?php

use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/schools', 'admin.schools');
// Route::view('/users', 'admin.users');
Route::controller(CatalogController::class)->group(function(){
    Route::get('/users','index')->defaults('model' , 'App\Models\User')->name('users');
    Route::get('/schols','index')->defaults('model' , 'App\Models\School')->name('schools');
    Route::post('/schols','store')->defaults('model' , 'App\Models\School')->name('schools.add');
});


Route::get('test-axios', function(){
    return json_encode([1,2,3,43]);
})->name('test');