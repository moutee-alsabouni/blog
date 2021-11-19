<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        // $posts = Post::orderby('created_at')->limit(6);
        $posts = Post::paginate(6);
        return view('post.index', ['posts' => $posts]);
    }

    public function all()
    {
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    public function create ()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'title'             => 'required|min:4|max:255',
            'featured_image'    => 'required|url',
            'content'           => 'required|min:4',
            'category_id'       => 'required|numeric|exists:categories,id',
            'slug'             => 'required|min:4|max:255',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->featured_image = $request->featured_image;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();
            // this Sync method should be after Save method
        $post->tags()->sync($request->tags);

        // $post = Post::create($request->all());

        return redirect()->route('posts.index')->with('post_created', 'The Post was created successfully');
    }

    public function show (Post $post)
    {
        return view('post.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.edit', ['post' => $post, 'categories' => $categories, 'tags' => $tags]);
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title'             => 'required|min:4|max:255',
            'featured_image'    => 'required|url',
            'content'           => 'required|min:4',
        ]);
        $post->title = $request->title;
        $post->featured_image = $request->featured_image;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();
        $post->tags()->sync($request->tags);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('post_updated', 'The Post was updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
