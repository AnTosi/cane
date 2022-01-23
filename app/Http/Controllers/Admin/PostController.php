<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(6);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validazione:

        $validated_data = $request->validate(
            [
                'title'=>'required | unique:posts',
                'text'=>'required'
            ]
            );
        
        // ddd($validated_data);
        //
        // $post = new Post();
        // $post->title = $request->title;
        // $post->text = $request->text;
        // $post->save();
        
        //this replaces the above area but i need to do a mass assignation with  fillable
        Post::create($validated_data);
        
        //post | redirect | get
        return redirect()->route('admin.posts.index')->with('feedback', 'Post succesfully created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('admin.posts.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $validated_data = $request->validate(
            [
                'title' => [
                    'required',
                    Rule::unique('posts')->ignore($post->id),
                ],
                'text' => 'required'
            ]
            );

            $post->update($validated_data);

            return redirect()->route('admin.posts.index')->with('feedback', 'Post successfully modified');

        // ddd($post, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('admin.posts.index')->with('feedback', 'Post removed');
    }
}
