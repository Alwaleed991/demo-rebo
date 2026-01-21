<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\SendJobPostedEmail;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;





class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(3);
        return view('jobs.index', [
            "jobs" => $jobs
        ]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            "job" => $job
        ]);
    }

    public function create()
    {
        return view('jobs/create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job=Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);


        dispatch(new SendJobPostedEmail($job, Auth::user()->email));

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        //1- Gate::authorize will run the logic inside the define function. If it's true, then the code continue. If it's false, it's throw a forbidden page,
        //2- you don't need to pass the user, because laravel do it do it automatically. 
        // Gate::authorize('edit-job', $job);

        return view('jobs.edit', [
            "job" => $job
        ]);
    }

    public function update(Job $job)
    {


        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // $job=Job::findOrFail($id);  No need for this any more because Route Model Binding handil it automaticly and show 404 by it self if job not found

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect("/jobs/" . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect("/jobs");
    }
}
