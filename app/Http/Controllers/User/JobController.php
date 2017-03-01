<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function create_job(Request $request)
    {
        $this->validate([
            'position' => 'required',
            'description' => 'required',
            'offer' => 'required|numeric'
        ]);

        \App\Job::create([
            'position' => $request->position,
            'description' => $request->description,
            'offer' => $request->offer,
            'client_id' => Auth::user()->id
        ]);

        return redirect()->to('/jobs');
    }

    public function display_job($id)
    {
        $job = \App\Job::find($id);

        return view('users.job',['job' => $job]);
    }

    public function edit_job($id)
    {
        $job = \App\Job::find($id);

        return view('users.job-edit', ['job' => $job]);
    }

    public function update_job($id, Request $request)
    {
        \App\Job::find($id)->update([
            'description' => $request->description,
            'position' => $request->position,
            'offer' => $request->offer
        ]);

        return redirect()->to('/jobs');
    }

    public function delete__job($id)
    {
        \App\Job::find($id)->delete();

        return redirect()->to('/jobs');
    }

    public function job_done($id)
    {
        \App\Job::find($id)->update(['isDone' => true]);

        return redirect()->to('/jobs');
    }
}
