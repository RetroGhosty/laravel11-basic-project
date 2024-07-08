<?php

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


// Contact page homework
Route::get("/contact", function(){
    return view("contact");
});

Route::get("/jobs", function(){
    $jobs = JobListing::with('employer')->latest()->simplePaginate(5);

    return view("jobs/index", [
        'jobs' => $jobs
    ]);
});

Route::get("/jobs/create", function (){
    return view("jobs/create");
});


// Create a job post request
Route::post('/jobs/create', function (Request $request){
    $request->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric'],
    ]);

    JobListing::create([
        'title' => request('title'),
        'salary' => '$' . strval(request('salary')),
        'employer_id' => 2
    ]);
    return redirect('/jobs');
});

Route::get("/jobs/{id}", function($id){
    $job = JobListing::find($id);
    if (!$job) {
        abort(404);
    }
    return view('jobs/show', ['job' => $job]);
});
