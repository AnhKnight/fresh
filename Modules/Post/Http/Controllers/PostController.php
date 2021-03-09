<?php

namespace Modules\Post\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\CategoryPost;
use Modules\Post\Entities\Post;
use Modules\Post\Events\PostViewed;
use Modules\Tag\Entities\Tag;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(CategoryPost $model)
    {
        if (request()->has('category')) {
            $category = $model->where('slug', \request('category'))->with('translations')->firstOrFail();
            $posts = Post::with('user')->whereHas('categories', function ($query){
                $query->where('is_active', 1)->where('slug', request('category'));
            })->paginate(12)->appends(request()->query());
        }else{
            abort(404);
        }

        $categories = CategoryPost::where('parent_id', 0)->with('children')->latest()->take(3)->get();
        return view('public.posts.index', compact('posts', 'category', 'categories'));
    }

    /**
     * Show the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::findBySlug($slug);
        event(new PostViewed($post));
        $categories = CategoryPost::where('parent_id', 0)->with('children')->latest()->take(3)->get();
        $post_news = Post::take(5)->latest()->get();
        return view('public.posts.show', compact('post','categories', 'post_news'));
    }
}
