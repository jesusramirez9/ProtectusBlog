<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        //
        if (! \App::runningInConsole()) {
            # code...
            $post->user_id = auth()->user()->id;
        }
       
    }

   
 
    public function deleting(Post $post)
    {
        //
        if ($post->image) {
            # code...
            Storage::delete($post->image->url);
        }

    }

  
  
}
