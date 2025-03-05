<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Service;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $services = Service::all();
        $educations = Education::orderBy('created_at', 'desc')->get();
        $experiences = Experience::orderBy('created_at', 'desc')->get();
        $projects = Project::orderBy('created_at', 'desc')->get();
        $skill = Skill::first();
        return view('layout.app', compact('about', 'services', 'educations', 'experiences', 'projects', 'skill'));
    }
}
