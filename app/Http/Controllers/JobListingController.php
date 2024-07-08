<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    public function index(){
        $jobs = JobListing::with('employer')->latest()->simplePaginate(5);
        return view("jobs/index", [
            'jobs' => $jobs
        ]);
    }

    public function show(JobListing $job){
        return view('jobs/show', ['job' => $job]);
    }

    public function create(Request $request){
        return view("jobs/create");
    }
    
    public function store(Request $request){
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
    
        return view("jobs/create");
    }

    public function edit(JobListing $job){

        return view('jobs/edit', ['job' => $job]);
    }

    public function update(JobListing $job, Request $request){
        //authorize (on hold)

        // validate
        $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        //update & persist
        $job->update([
            'title' => $request->title,
            'salary' => $request->salary
        ]);

        //redirect to the job page
        return redirect("/jobs/{$job->id}");
    }

    public function destroy(JobListing $job){
        // authorize

        // delete
        $job->delete();

        //redirect
        return redirect("/jobs");
    }





}
