<div>

    <h3>{{$title ?? 'TodoManager'}}</h3>
    <hr/>
{{--   $content used in:
     <x-xxx>
    <x-slot:title>
        Custom Titlexxxx
        </x-slot:title>
    <x-slot name="content">Hello again</x-slot>
</x-xxx>--}}

    {{$content}}
    {{$slot}}


</div>
