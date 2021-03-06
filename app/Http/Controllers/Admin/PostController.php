<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts= Post::all();

       $categorias = Category::all();
      
        return view('admin.posts.index', compact('posts','categorias'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::pluck('name', 'id');
        $categories_it = Category::pluck('name_it', 'id');
        $tags = Tag::all();
      
        return view('admin.posts.create', compact('categories','categories_it', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $post = Post::create($request->all());
            if ($request->file('file')) {
                
                $url = Storage::put('posts', $request->file('file'));

                $post->image()->create([
                    'url' => $url
                ]);
            }


            if($request->tags){

            $post->tags()->attach($request->tags);
        }

        return redirect()->route('admin.posts.index', $post)->with('success', 'El post se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) 
    {

        // $this->authorize('author', $post);

        $categories = Category::pluck('name', 'id');
        $categories_it = Category::pluck('name_it', 'id');
        $tags = Tag::all();

        return view('admin.posts.edit', compact('post', 'categories','categories_it', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {

        // $this->authorize('author', $post);
        $post->update($request->all());

        if ($request->file('file')) {
            
            $url = Storage::put('posts', $request->file('file'));

            if ($post->image) {
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url
                ]);
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }
        }

        if($request->tags){

            $post->tags()->sync($request->tags);
        }

        return redirect()->route('admin.posts.edit', $post)->with('success', 'El post se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $this->authorize('author', $post);
        $post->delete();

        return redirect()->route('admin.posts.index', $post)->with('success', 'El post se ha eliminado correctamente');
    }
}
