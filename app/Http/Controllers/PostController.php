<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller{


    public function index($slug){
        // get slug from url and serach in post  table using that slug.
        $post = Post::where(['slug'=>$slug])->first();
        if ($post) {
            // افزودن یک واحد به مقدار ستون view
            $post->increment('views');

            // یا می‌توانید این روش را هم استفاده کنید:
            // $post->view = $post->view + 1;
            // $post->save();
        }
        return view('single-blog',compact('post'));
    }
}
