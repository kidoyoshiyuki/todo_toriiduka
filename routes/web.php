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
 
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('/tasks');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('/tasks');
Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('/tasks/{task}');
Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
// Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('/tasks');
// Route::get('tasks/update/{task}', [App\Http\Controllers\TaskController::class, 'updateform'])->name('/update/{task}');
// Route::post('tasks/update/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('update');
// Route::delete('/task/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('/task/{task}');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
