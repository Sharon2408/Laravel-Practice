<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

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
    return view('home');
});

Route::get('welcome', function () {
    return view('welcome');
});

// Route::get('home',function(){
//     return view('home');
// });

Route::get('trainees', function () {

    $trainees = ["Arjun", "Dhanaprakash", "Hari", "Ranita", "Selva", "Vasanth", "Vikram"];

    return view('trainees', ['train' => $trainees]);
});

Route::get('about', function () {
    return view('about');
})->middleware('auth');

Route::view('contact', 'contact')->middleware('auth');
 Route::get('Customers/employee', [CustomersController::class, 'employee'])->middleware('auth')->middleware('verified');
 Route::get('Customers/cgvak', [CustomersController::class, 'index']);
  Route::get('Customers/filter', [CustomersController::class, 'filterRecords']);
 Route::get('Customers/ass', [CustomersController::class, 'assArray']);
  Route::get('Customers/comp', [CustomersController::class, 'compArray']);
 Route::get('Customers/scope', [CustomersController::class, 'scope']);
Route::get('Customers/create', [CustomersController::class, 'company']);
Route::post('Customers', [CustomersController::class, 'store']);
Route::get('Customers/{employee}/edit', [CustomersController::class, 'show']);
Route::patch('Customers/{employee}', [CustomersController::class, 'update']);
Route::delete('/Customers/{employee}', [CustomersController::class, 'destroy']);
Auth::routes([
    'verify' => true
]);
//Route::resource('Customers', CustomersController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');