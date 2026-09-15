<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        Job::create([
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'salary' => $request->salary,
            'description' => $request->description
        ]);
        return redirect('/jobs');
    }

    public function index()
    {
        $jobs = Job::all();

        return view('jobs.index', compact('jobs'));
    }

    public function edit($id)
{
    $job = Job::find($id);

    return view('jobs.edit', compact('job'));
}

    public function update(Request $request, $id)
    {
        $job = Job::find($id)->update([
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'salary' => $request->salary,
            'description' => $request->description

        ]);

        return redirect('/jobs');
    }

    public function destroy($id)
{
    $job = Job::find($id);

    $job->delete();

    return redirect('/jobs');
}
}
