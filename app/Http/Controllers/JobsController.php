<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Job;
use App\Models\SavedJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    //

    public function search(Request $request) {

        $name = $request->input('name');
        $category = $request->input('category');



        if ($category != 0) {
            $jobs = Job::where('title', 'like', '%' . $name . '%')->where('category_id', $category)->paginate(16);
        } else {
            $jobs = Job::where('title', 'like', '%'. $name. '%')->paginate(16);
        }

        return view('job-search')
            ->with('jobs', $jobs)
            ->with('name', $name);
    }

    public function single($id) {

        $job = Job::find($id);

        $related_jobs = Job::where('category_id', $job->category_id)
            ->where('id', "!=", $id)
            ->take(4)->get();

        $savedJob = SavedJob::where('job_id', $id)->where('user_id', Auth::user()->id)->count();

        $appliedJob = AppliedJob::where('job_id', $id)->where('user_id', Auth::user()->id)->count();

        return view('single-job')
            ->with('job', $job)
            ->with('related_jobs', $related_jobs)
            ->with('savedJob', $savedJob)
            ->with('appliedJob', $appliedJob);
    }

    public function saveJob(Request $request) {
        $savedJob = new SavedJob();
        $savedJob->job_id = $request->job_id;
        $savedJob->user_id = $request->user_id;
        $savedJob->save();

        return redirect('/single-job/' . $request->job_id . '')->with('save', 'Job saved');
    }

    public function applyJob(Request $request) {
        $applyJob = new AppliedJob();
        $applyJob->job_id = $request->job_id;
        $applyJob->user_id = $request->user_id;
        $applyJob->cv = $request->cv;
        $applyJob->save();

        return redirect('/single-job/' . $request->job_id . '')->with('apply', 'Apply Job Success');
    }
}
