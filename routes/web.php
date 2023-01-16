<?php
use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EmployeeController;
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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::post('insertdata', 'HomeController@index')->name('insertdata');

// Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');

// // Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');

// // Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/land', function () {
//     return view('form-new')->name('form-new');
// });


 
//Route::get('/form', [EmployeeController::class, 'index']);
// Route::post('/home', 'EmployeeController@index');
// //Route::get('/store-form', 'EmployeeController@index')->name('insertdata');
// Route::get('/store-form', EmployeeController::class)->name('insertdata');

//Route::post('store-form', [EmployeeController::class, 'insertdata']);
//Route::post('/store-form', EmployeeController)->name('insertdata');


//Route::post('homes', [EmployeeController::class, 'insertdata'])->name('insertdata');
       // Route::post('/homes', 'EmployeeController@insertdata');
//Route::post('insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');


