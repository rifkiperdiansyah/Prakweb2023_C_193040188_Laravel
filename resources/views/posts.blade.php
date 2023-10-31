<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
   
    <title>Blog Saya || POSTS</title>
</head>
<body>
@extends('layouts.main')

@section('container')

  @foreach ($posts as $post)

    <article class="mb-5">
      <h2>
        <a href="/posts/{{ $post['sl'] }}">{{ $post["title"] }}</a>
      </h2>
      <h5>By: {{ $post["author"] }}</h5>
      <p>{{ $post["body"] }}</p>
    </article>

  @endforeach

@endsection
</body>
</html>