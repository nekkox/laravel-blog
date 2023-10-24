@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="d-flex  flex-column align-items-center" style="height: 100vh;">


            @foreach($posts as $post)

                <article>
                    <div class="card my-5 shadow-lg border-secondary border-opacity-50" style="width: 35rem;">
                        <div class="card-header text-center bg-dark-subtle fw-bold ">
                            <a href="{{ url('posts/'.$post->slug) }}"> {{$post->title}} </a>
                        </div>
                        <div class="card-body text-center overflow-hidden " style="height: auto;">
                        <p class="px-5 py-3"> {{ $post->excerpt }} </p>
                        </div>
                        <div class="card-footer">
                            {{ \Carbon\Carbon::translateTimeString(now()) }}
                        </div>
                    </div>
                </article>

            @endforeach

        </div>
    </div>
@endsection



