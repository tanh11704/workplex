<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Experience;
use App\Models\JobType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function myProfile() {
        $user = Auth::user();
        $jobTypes = JobType::getJobTypes();
        $jobCategories = Category::getCategories();
        $experiences = Experience::getExperiences();

        return (view('admin.my-profile'))
            ->with('user', $user)
            ->with('jobTypes', $jobTypes)
            ->with('jobCategories', $jobCategories)
            ->with('experiences', $experiences);
    }

    public function update(Request $request) {
        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $fileName = $avatar->getClientOriginalName();
            $avatar->storeAs('avatars', $fileName);
            $user->avatar = $fileName;
        }

        $user->name = $request->input('name');
        $user->job_title = $request->input('job_title');
        $user->phone = $request->input('phone');
        $user->job_type = $request->input('job_type');
        $user->job_category = $request->input('job_category');
        $user->experience = $request->input('experience');
        $user->education = $request->input('education');
        $user->current_salary = $request->input('current_salary');
        $user->expected_salary = $request->input('expected_salary');
        $user->age = $request->input('age');
        $user->language = $request->input('language');
        $user->about = $request->input('about');

        $user->save();

        return redirect('/dashboard/myprofile')->with('updated', 'Success Update Information');
    }

    public function updateSocial(Request $request) {
        $user = Auth::user();

        $user->facebook = $request->input('facebook');
        $user->linkedin = $request->input('linkedin');
        $user->instagram = $request->input('instagram');
        $user->twitter = $request->input('twitter');

        $user->save();

        return redirect('/dashboard/myprofile')->with('updated', 'Success Update Social Information');
    }

    public function updateContact(Request $request) {
        $user = Auth::user();

        $user->country = $request->input('country');
        $user->city = $request->input('city');
        $user->full_address = $request->input('full_address');

        $user->save();

        return redirect('/dashboard/myprofile')->with('updated', 'Success Update Contact Information');
    }
}
