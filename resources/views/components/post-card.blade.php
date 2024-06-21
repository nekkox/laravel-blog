@props(['post'])

<article
  {{$attributes->merge(['class'=>"transition-colors duration-300 hover:bg-gray-100 hover:border-opacity-5 hover:rounded-xl
   rounded-xl  border-2 border-dotted border-blue-30
"])}}>
    <div class="py-6 px-5 flex flex-col justify-between relative" style="min-height: 620px; max-height: 620px; padding-bottom: 100px;">

        {{--IMAGE--}}
        <div style="min-height: 200px" class="mb-5 flex items-center justify-center rounded-xl object-cover">
            <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('images/illustration-8.jpg') }}" alt="Blog Post illustration" class="rounded-xl absolute inset-0 w-full h-full object-cover" style="max-height: 200px">
        </div>

        {{--HEARDER--}}
        <div class="mt-8 flex flex-col justify-between flex-grow">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category"/>
                </div>

                <div class="mt-6">
                    <h1 class="text-3xl">
                        {{ $post->title }}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </span>
                </div>
            </header>

            <div class="text-sm mt-4 flex-grow">
                <p>
                    {{$post->excerpt}}
                </p>
            </div>
        </div>

        {{--CAR FOOTER--}}
        <footer class="absolute bottom-0 left-0 right-0 flex flex-col justify-between items-center p-6  ">
            <div class="flex items-center text-sm flex-none">
                <img width="76" height="83" src="/images/cat_avatar.png">
                <div class="ml-3">
                    <h5 class="font-bold"> <a href="/authors/{{$post->author->username}}"> {{ $post->author->name }}</a></h5>
                </div>
            </div>

            <div class="flex">
                <a href="/posts/{{$post->slug}}"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-3"
                >Read More</a>
            </div>
        </footer>
    </div>

</article>
