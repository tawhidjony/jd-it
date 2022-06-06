<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function career_job()
    {
        $careers = Career::where('status', 1)->get();
        return view('frontend.career.career', compact('careers'));
    }
    public function create()
    {
        return view('backend.careers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'experience' => 'required',
            'deadline' => 'required',
            'job_description' => 'required',
        ]);

        $career = new Career();
        $career->uuid = Str::uuid();
        $career->title = $request->title;
        $career->experience = $request->experience;
        $career->deadline = $request->deadline;
        $career->job_description = $request->job_description;
        $saveCareer = $career->save();
        if($saveCareer){
            return redirect()->route('career.index')->with('success', 'Career Created Successfully');
        }
    }

    public function ckeditorUploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
