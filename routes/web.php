<?php

use App\Http\Controllers\JobListingController;
use App\Models\Job;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});

Route::get("/about", function(){
    return view("about");
});

// Method 1
// Route::get("/jobs", [JobListingController::class, 'index']);
// Route::get("/jobs/create", [JobListingController::class, 'create']);
// Route::post('/jobs/create', [JobListingController::class, 'store']);
// Route::get("/jobs/{job}/edit", [JobListingController::class, 'edit']);
// Route::put("/jobs/{job}", [JobListingController::class, 'update']);
// Route::delete("/jobs/{job}", [JobListingController::class, 'destroy']);
// Route::get("/jobs/{job}", [JobListingController::class, 'show']);

// Method 2
// Route::controller(JobListingController::class)->group(function (){
//     Route::get("/jobs", 'index');
//     Route::get("/jobs/{job}", 'show');
//     Route::get("/jobs/create", 'create');
//     Route::post('/jobs/create', 'store');
//     Route::get("/jobs/{job}/edit", 'edit');
//     Route::put("/jobs/{job}", 'update');
//     Route::delete("/jobs/{job}", 'destroy');
// });

// Method 3
Route::resource('jobs', JobListingController::class);

// Method 4
// Route::resource('jobs', JobListingController::class, [
//     // 'only' => ['index', 'show'],
//     // 'except' => ['index', 'show']
// ]);

