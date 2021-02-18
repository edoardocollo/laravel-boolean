<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>blog</h1>
    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/blog">blog</a>



    @foreach ($posts as $post)
    <h2>{{ $post->titolo }}</h2>
    <img src="{{$post->img}}" alt="">
    <p>{{ $post->contenuto }}</p>
    @endforeach
    @php
    dd($posts);
    @endphp


  </body>
</html>
