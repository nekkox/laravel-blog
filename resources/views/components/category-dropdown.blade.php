<x-dropdown>
    @props(['current' => null])

    {{-- Defining trigger slot --}}
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left inline-flex items-center">
            @if (isset($currentCategory))
                {{ $currentCategory->name }}
            @else
                {{ isset($current) ? $current->name : 'Category' }}
            @endif

            <x-icon name="dropdown-arrow" class="absolute pointer-events-none"/>

        </button>
    </x-slot>

    {{--All goes into $Slot in dropdown component --}}
    <x-dropdown-item href="/posts/?{{http_build_query(request()->except('category','page'))}}" :active="request()->routeIs('home')">All</x-dropdown-item>

    @foreach($categories as $category)

        <x-dropdown-item

            {{-- :active="isset($currentCategory) && $currentCategory->is($category)" --}}
            :active="(request()->is('categories/' . $category->slug)) || ((request()->is('posts')) && (request()->query('category') === $category->slug) )"
            href="/posts/?category={{ $category->slug }}&{{http_build_query(request()->except('category','page'))}}">{{ $category->name }}</x-dropdown-item>
    @endforeach
</x-dropdown>
