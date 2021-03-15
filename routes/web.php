<?php

use App\Http\Controllers\ClientsController;
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

route::get('/add-client',[ClientsController::class, 'addClient'])->name('client.add');
route::post('/add-client',[ClientsController::class, 'saveClient'])->name('save.client');
Route::get('/liste-client',[ClientsController::class,'ClientList'])->name('liste.client');
Route::get('/edit-client/{id}',[ClientsController::class,'EditClient'])->name('edit.client');
Route::post('/update-client',[ClientsController::class,'updateClient'])->name('update.client');
Route::get('/delete-client /{id}',[ClientsController::class,'DeleteClient'])->name('delete.client');
