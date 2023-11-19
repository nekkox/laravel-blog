<x-layout>

    {{--<div class="container-fluid "
         style=" background: radial-gradient(circle, rgba(169,16,121,1) 0%, rgba(64,4,80,1) 61%, rgba(46,2,73,1) 100%) no-repeat;  ">
        <div class="d-flex  flex-column align-items-center" style="height: 100vh">


            @foreach($posts as $post)
                <article>
                    <div class="card my-5 shadow-lg border-secondary border-opacity-50"
                         style="width: 50rem; min-height: 15rem; max-height: 20rem">
                        <div class="card-header text-center bg-dark-subtle fw-bold ">
                            <a href="{{ url('posts/'.$post->slug) }}"> {{$post->title}} </a>
                            <p class="text-start">By <a
                                    href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
                                <a
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </p>

                        </div>
                        <div class="card-body text-center overflow-hidden inner " style="height: auto;">
                            <p class=""> {{ $post->excerpt }} </p>
                        </div>
                        <div class="card-footer">
                            Category:
                            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                    </div>
                </article>

            @endforeach

        </div>
    </div>--}}





    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())

            <x-post-grid :posts="$posts" />

        @else
            <p class="text-center font-semibold text-pink-600 text-2xl mt-16">No Posts yet, please check back later.</p>
        @endif

        {{--  <x-post-card :post="$posts[1]"/>--}}
        {{--}}  <x-post-card/> --}}


        {{-- <div class="lg:grid lg:grid-cols-3">
            {{-- <x-post-card/>
             <x-post-card/>
             <x-post-card/>
    </div> --}}
    </main>
</x-layout>



