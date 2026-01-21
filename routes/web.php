<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;




Route::view('/', 'home'); // this is identical to Route::get('/', function () {return view('home');});
Route::view('/contact', 'contact');


Route::controller(JobController::class)->group(function () {

    Route::get('/jobs', 'index');

    Route::get('/jobs/create', 'create')
    ->middleware('auth');

    Route::post('/jobs', 'store')
    ->middleware('auth');

    Route::get('/jobs/{job}', 'show'); //Route::get('/post/{post:title}', function (POST $post)  {} here this mean find me the post with this uniqe id . in Route::get('/jobs/{job}', function (Job $job) in this find me the job with the id so '/jobs/{job}' === '/jobs/{job:id}'

    Route::get('/jobs/{job}/edit', 'edit')
    ->middleware('auth')
    ->can('edit' ,'job');

    Route::patch('/jobs/{job}', 'update')
    ->middleware('auth')
    ->can('edit' ,'job');

    Route::delete('/jobs/{job}', 'destroy')
    ->middleware('auth')
    ->can('edit' ,'job');
});



Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);

Route::get('/login',[SessionController::class, 'create'])->name('login');
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);



// Route::resource('jobs',JobController::class); // this will generate the seven routes down there. if you only want 3 or 4 you can use only or except.
                                                 // Resources in your application are mainly set up with those seven standard CRUD operations (index, create, store, show, edit, update, destroy) when you use Route::resource().

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', ['index']);
//     Route::post('/jobs', ['store']);
//     Route::get('/jobs/create', ['create']);
//     Route::get('/jobs/{job}/edit', ['edit']);
//     Route::patch('/jobs/{job}', ['update']);
//     Route::delete('/jobs/{job}', ['destroy']);
//     Route::get('/jobs/{job}', ['show']); //Route::get('/post/{post:title}', function (POST $post)  {} here this mean find me the post with this uniqe id . in Route::get('/jobs/{job}', function (Job $job) in this find me the job with the id so '/jobs/{job}' === '/jobs/{job:id}'
// });
