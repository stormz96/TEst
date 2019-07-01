<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class PagesController extends Controller
{
public function welcome(){

    $tasks = [
        'first task',
        'second task',
    ];
    return view('welcome',compact('tasks'));
}

public function about(){
    return view('about');
}

public function contact(){
    return view('contact');
}

public function create(){
    return view('project.create');
}

public function index(){

    $projects = Project::all();
    return view('project.index', compact('projects'));
}
public function store(Request $request){

    $project = new Project();
    $project->title = $request->title;
    $project->description = $request->description;
    $project->save();

    return redirect('/project');
}

}
