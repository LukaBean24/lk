<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Longman\Kautilities\Converter;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.posts', [
            'posts' => Post::all()
        ]);
    }

    public function create()
    {
        return view('admin.posts.post-create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title_en' => 'required',
            'title_ge' => 'required',
            'slug_en' => 'required',
            'slug_ge' => 'required',
            'body_en' => 'required',
            'body_ge' => 'required',
            'thumbnail' => 'required',
        ]);
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create([
            'title' => [
                'en' => $attributes['title_en'],
                'ge' => $attributes['title_ge'],
            ],
            'slug' => [
                'en' => $attributes['slug_en'],
                'ge' => $attributes['slug_ge'],
            ],
            'body' => [
                'en' => $attributes['body_en'],
                'ge' => $attributes['body_ge'],
            ],
            'thumbnail' => $attributes['thumbnail'],
            'link' => str_replace(' ', '-', Converter::kaToLat($attributes['slug_ge'])),
        ]);

        return redirect('/admin/posts')->with('success', __('post_added'));
    }

    public function remove($id)
    {
        Post::find($id)->delete();

        return redirect('/admin/posts')->with('success', 'სტატია წაშლილია');
    }
}
