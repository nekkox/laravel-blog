<div x-data="{show: false}" @click.away="show = false">
    {{-- Trigger --}}
    <button @click="show = !show"
            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left inline-flex items-center">
        {{ isset($currentCategory) ? $currentCategory->name : 'Category' }}

        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
             height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                <path fill="#222"
                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>
    </button>

    {{-- Dropdown Links --}}
    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50" style="display: none">
        {{--Looping through links--}}
        {{ $slot }}

    </div>

</div>
