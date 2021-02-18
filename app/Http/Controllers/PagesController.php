<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home()
  {
    return view('welcome');
  }
  public function about()
  {
    return view('about');
  }
  public function blog(Post $post)
  {
    $posts = $post->all();
    return view('blog', compact('posts'));
  }
}
