@auth
    <x-panel>
        <form method="post" action="{{ url('/posts/' . $post->slug . '/comments') }}">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                     class="rounded-full">

                <h2 class="ml-4">Add Something</h2>
            </header>

            <div class="mt-8">
                            <textarea class="w-full text-sm focus:outline-none focus:ring" name="body" cols="50"
                                      rows="5" placeholder="Say Something" required></textarea>
                @error('body')
                <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>

            <div class="flex justify-end  border-t border-gray-200 ">
              <x-form.button>Post</x-form.button>
            </div>
        </form>

    </x-panel>
@else
    <p class="font-semibold">
        <a class="hover:underline" href="/loginuser">Login</a> or
        <a class="hover:underline" href="/registeruser">Register</a> to leave a comment
    </p>
@endauth
