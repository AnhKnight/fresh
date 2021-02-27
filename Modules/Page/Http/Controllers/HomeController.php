<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Modules\Post\Entities\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::with('user')->whereHas('categories', function ($query){
                $query->where('is_active', 1);
            })->get();
        $categories = Category::with('children.products')->whereNull('parent_id')->take(5)->get();
        return view('public.home.index', compact('categories', 'posts'));
    }
}
