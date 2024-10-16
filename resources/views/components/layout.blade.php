<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="flex justify-between items-start">
        <div>
            <a href={{route('MainPosts')}}>
                <img src="{{asset('images/catLogo.png')}}" alt="Logo">
            </a>
        </div>

        <div class="mt-8 md:mt-0 ">
            <a href="{{route('MainPosts')}}" class="text-xs font-bold uppercase">Home Page</a>
            <div class="inline-flex">

                @auth

                    <x-dropdown>
                        <x-slot name="trigger">
                            <button><span class="text-s ml-6">Welcome <span
                                        class="text-red-500 font-bold">{{auth()->user()->name}}</span></span>
                            </button>
                        </x-slot>

                        <div>
                            @if (auth()->user()->can('admin'))
                            <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard
                            </x-dropdown-item>

                            <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">
                                New Post
                            </x-dropdown-item>
                            @endif
                            <x-dropdown-item href="/posts/" :active="request()->is('posts')">Home Page</x-dropdown-item>

                            <x-dropdown-item href="#" x-data="{}"
                                             @click.prevent="document.querySelector('#logout-form').submit()">Log Out
                            </x-dropdown-item>

                        </div>

                    </x-dropdown>




                    <form id="logout-form" method="post" action="{{route('logout')}}">
                        @csrf
                        <button type="submit"
                                class="bg-blue-500 ml-8 rounded-full text-xs  text-white uppercase px-5 py-3">
                            Log out
                        </button>
                    </form>
                @else
                    <a href="{{route('register')}}"
                       class="bg-blue-500 ml-3 rounded-full text-xs  text-white uppercase px-5 py-3">
                        Register
                    </a>
                    <a href="{{route('login')}}" class="bg-red-500 ml-3 rounded-full text-xs  text-white uppercase px-5 py-3">
                        Login
                    </a>
                @endauth

                <a x-data @click.prevent="document.getElementById('email').focus()" href="#newsletter"
                   class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>

            </div>
        </div>
    </nav>

    {{ $slot }}

    <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="{{asset('/images/newsletter.png')}}" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="/newsletter" class="lg:flex text-sm">
                    @csrf
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="{{asset('/images/mailbox-icon.svg')}}" alt="mailbox letter">
                        </label>

                        <input id="email" type="text" placeholder="Your email address" name="email"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>

                </form>

            </div>
            @error('email')
            <p class="font-semibold text-red-500 text-xs mt-3">{{$message}}</p>
            @enderror
        </div>
    </footer>
</section>

<x-flash/>
</body>

