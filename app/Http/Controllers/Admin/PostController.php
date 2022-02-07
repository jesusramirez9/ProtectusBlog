<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create','store');
        $this->middleware('can:admin.posts.edit')->only('edit','update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
    }

    public function index()
    {
        //
        return view('admin.posts.index');
    }

 
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.posts.create', compact('categories','tags'));
    }

 
    public function store(PostRequest $request)
    {
        //

    //    return Storage::put('public/posts', $request->file('file'));

   
      $post = Post::create($request->all());

      if ($request->file('file')) {
          # code...
         $url = Storage::put('public/posts', $request->file('file'));
         $post->image()->create([
             'url' => $url
         ]);
      }

      Cache::flush();

      if($request->tags){
          $post->tags()->attach($request->tags);
      }
      return redirect()->route('admin.posts.edit',$post);

    }




    public function edit(Post $post)
    {
        //
        $this->authorize('author',$post);
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post','categories','tags'));
    }

    
    public function update(PostRequest $request, Post $post)
    {
        //
        $this->authorize('author',$post);
        $post->update($request->all());
        if ($request->file('file')) {
            # code...
            
            $url = Storage::put('public/posts', $request->file('file'));
            if ($post->image) {
                # code...
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
        Cache::flush();
        return redirect()->route('admin.posts.edit',$post)->with('info','El post se actualizó con éxito');
    }

  
    public function destroy(Post $post)
    {
        //
        $this->authorize('author',$post);
        $post->delete();
        Cache::flush();
        return redirect()->route('admin.posts.index',$post)->with('info','El post se eliminó con éxito');
    }
}
