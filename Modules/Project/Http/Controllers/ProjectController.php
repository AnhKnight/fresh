<?php

namespace Modules\Project\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Project\Entities\CategoryProject;
use Modules\Project\Entities\Project;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(CategoryProject $model)
    {
        if (request()->has('category')) {
            $category = $model->where('slug', \request('category'))->with('translations')->firstOrFail();
            $projects = Project::with('user')->whereHas('categories', function ($query){
                $query->where('is_active', 1);
            })->paginate(12)->appends(request()->query());;
        }else{
            abort(404);
        }
        return view('public.projects.index', compact('projects', 'category'));
    }

    /**
     * Show the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::findBySlug($slug);
        $categories = CategoryProject::where('parent_id', 0)->with('children')->latest()->take(3)->get();
        $project_news = Project::take(5)->latest()->get();
        return view('public.projects.show', compact('project','categories', 'project_news'));
    }
}
