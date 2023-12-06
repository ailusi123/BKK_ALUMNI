<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\LandingController;


use Illuminate\Support\Facades\Route;

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
    return view('Auth/login');
});

Route::get('/landingpage',function(){
    return view ('landing_page.index');
  });
Route::get('/features',function(){
    return view ('landing_page.features');
  });
Route::get('/pricing',function(){
    return view ('landing_page.pricing');
  });
Route::get('/blog',function(){
    return view ('landing_page.blog');
  });  
Route::get('/contact',function(){
    return view ('landing_page.contact');
  });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('login',[AuthController::class,'login']);
//     Route::post('login',[AuthController::class,'auth']);
//     Route::get('register',[UserController::class,'register']);
//     Route::post('register',[UserController::class,'create']);
//     Route::get('logout',[AuthController::class,'logout']);

Route::get('alumni',[AlumniController::class,'show']);
Route::get('alumni/add',[AlumniController::class,'add']);
Route::post('alumni/create',[AlumniController::class,'create']);
Route::get('alumni/delete/{id}',[AlumniController::class, 'delete']);
Route::get('alumni/edit/{id}',[AlumniController::class, 'edit']);
Route::post('alumni/update/{id}',[AlumniController::class,'update']);

Route::get('perusahaan',[PerusahaanController::class,'show']);
Route::get('perusahaan/add',[PerusahaanController::class,'add']);
Route::post('perusahaan/create',[PerusahaanController::class,'create']);
Route::get('perusahaan/delete/{id_perusahaan}',[PerusahaanController::class, 'delete']);
Route::get('perusahaan/edit/{id_perusahaan}',[PerusahaanController::class, 'edit']);
Route::post('perusahaan/update/{id_perusahaan}',[PerusahaanController::class,'update']);

Route::get('lowongan',[LowonganController::class,'show']);
Route::get('lowongan/add',[LowonganController::class,'add']);
Route::post('lowongan/create',[LowonganController::class,'create']);
Route::get('lowongan/delete/{id_loker}',[LowonganController::class, 'delete']);
Route::get('lowongan/edit/{id_loker}',[LowonganController::class, 'edit']);
Route::post('lowongan/update/{id_loker}',[LowonganController::class,'update']);


Route::get('lamaran',[LamaranController::class,'show']);
Route::get('lamaran/add',[LamaranController::class,'add']);
Route::post('lamaran/create',[LamaranController::class,'create']);
Route::get('lamaran/delete/{id}',[LamaranController::class, 'delete']);
Route::get('lamaran/edit/{id}',[LamaranController::class, 'edit']);
Route::post('lamaran/update/{id}',[LamaranController::class,'update']);


Route::get('/approvals', [ApprovalController::class, 'index']);
Route::put('/approvals/{approval}/approve', [ApprovalController::class, 'approve'])->name('approvals.approve');
Route::put('/approvals/{approval}/reject', [ApprovalController::class, 'reject'])->name('approvals.reject');


Route::get('loker',[PageController::class,'show']);
Route::get('loker/add',[PageController::class,'add']);
Route::post('loker/create',[PageController::class,'create']);


Route::get('features',[LandingController::class,'index_per']);
Route::get('blog',[LandingController::class,'index_loker']);



// Route::get('approve',[ApproveController::class,'show']);
// Route::get('lamaran/add',[LamaranController::class,'add']);
// Route::post('lamaran/create',[LamaranController::class,'create']);
// Route::get('lamaran/delete/{id}',[LamaranController::class, 'delete']);
// Route::get('lamaran/edit/{id}',[LamaranController::class, 'edit']);
// Route::post('lamaran/update/{id}',[LamaranController::class,'update']);