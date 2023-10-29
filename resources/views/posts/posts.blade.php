@extends('layouts.app')

@section('content')
    <div class="container-fluid " style="background: radial-gradient(circle, rgba(169,16,121,1) 0%, rgba(64,4,80,1) 61%, rgba(46,2,73,1) 100%) no-repeat;">
        <div class="d-flex  flex-column align-items-center" style="height: 100vh;">


            @foreach($posts as $post)
                <article>
                    <div class="card my-5 shadow-lg border-secondary border-opacity-50" style="width: 50rem; min-height: 15rem; max-height: 20rem">
                        <div class="card-header text-center bg-dark-subtle fw-bold ">
                            <a href="{{ url('posts/'.$post->slug) }}"> {{$post->title}} </a>
                        </div>
                        <div class="card-body text-center overflow-hidden inner " style="height: auto;">
                        <p class=""> {{ $post->excerpt }} </p>
                        </div>
                        <div class="card-footer">
                           Category:
                            <a href="">{{ $post->category->name }}</a>
                        </div>
                    </div>
                </article>

            @endforeach

        </div>
    </div>
@endsection



