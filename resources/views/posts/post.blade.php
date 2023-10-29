@extends('layouts.app')

@section('content')
  <article class="container p-5 lh-base fst-normal fs-5 " style="width: 50rem;">

      <h1>{{$post->title}}</h1>
      <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
      <br />

      <p>{{$post->body }}</p>


      <a class="btn btn-outline-danger p-2 shadow-sm " href="{{ url('posts') }}">Back to All Posts</a>

  </article>

@endsection
